<?php

namespace Modules\NewsLetter\app\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Modules\NewsLetter\app\Http\Requests\AdminSendAllEmailRequest;
use Modules\NewsLetter\app\Http\Requests\AdminSendMailReqeuest;
use Modules\NewsLetter\app\Models\NewsLetter;

class AdminNewsLetterController extends Controller
{
    public function index()
    {
        $all_subscriber = NewsLetter::latest()->take(500)->get();
        return view('newsletter::backend.newsletter-index')->with(['all_subscriber' => $all_subscriber]);
    }

    public function send_mail(AdminSendMailReqeuest $request)
    {
        // request does validation
        $data = $request->validated();

        try {
            Mail::to($request->email)->send(new SubscriberMessage($data));
        } catch (\Throwable $th) {
        }

        return redirect()->back()->with([
            'msg' => __('Mail Send Success...'),
            'type' => 'success',
        ]);
    }

    public function delete($id)
    {
        NewsLetter::find($id)->delete();
        return redirect()->back()->with(['msg' => __('Subscriber Delete Success....'), 'type' => 'danger']);
    }

    public function send_mail_all_index()
    {
        return view('newsletter::backend.send-main-to-all');
    }

    public function send_mail_all(AdminSendAllEmailRequest $request)
    {
        $all_subscriber = NewsLetter::all();

        foreach ($all_subscriber as $subscriber) {
            $data = [
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            try {
                Mail::to($subscriber->email)->send(new SubscriberMessage($data));
            } catch (\Throwable $th) {
            }
        }

        return redirect()->back()->with([
            'msg' => __('Mail Send Success..'),
            'type' => 'success',
        ]);
    }

    public function add_new_sub(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:news_letters',
        ],
            [
                'email.required' => __('email field required'),
            ]);

        NewsLetter::create($request->all());

        return redirect()->back()->with([
            'msg' => __('New Subscriber Added..'),
            'type' => 'success',
        ]);
    }

    public function bulk_action(Request $request)
    {
        $all = NewsLetter::find($request->ids);
        foreach ($all as $item) {
            $item->delete();
        }

        return response()->json(['status' => 'ok']);
    }

    public function verify_mail_send(Request $request)
    {
        $subscriber_details = NewsLetter::findOrFail($request->id);
        $token = $subscriber_details->token ?? Str::random(32);
        if (empty($subscriber_details->token)) {
            $subscriber_details->token = $token;
            $subscriber_details->save();
        }
        $message = __('Verify your email to get all news from ').get_static_option('site_title').'<div class="btn-wrap"> <a class="anchor-btn" style="background-color: #0e76a8; color: #0b0b0b" href="'.route('newsletter.subscriber.verify', ['token' => $token]).'">'.__('verify email').'</a></div>';
        $data = [
            'message' => $message,
            'subject' => __('verify your email'),
        ];

        try {
            //send verify mail to newsletter subscriber
            Mail::to($subscriber_details->email)->send(new BasicMail($data));
        } catch (\Throwable $th) {
        }

        return redirect()->back()->with([
            'msg' => __('verify mail send success'),
            'type' => 'success',
        ]);
    }
}
