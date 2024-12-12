<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.system.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nj8gbgEa8Rt1JIDc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yl8NvTLuk8ifowyD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard/getUserData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.user.graph.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard/getListingData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.listing.graph.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dark-mode-toggle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dark.mode.toggle',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WjQeMpF2v7lM0d7B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eVZVnJwzBd5gHbnJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/user-all-listings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.all.listings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/user-all/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.user.all.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/guest/all-listings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.guest.all.listings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/guest/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.guest.listings.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/guest/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.guest.listings.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/guest-all/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.guest.all.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/guest/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.guest.listing.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.listings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.new.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/admin-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.search.listings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/admin-paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.paginate.listings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/admin-bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bulk.action.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/reason/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/reason/edit-reason' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/reason/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/reason/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/reason/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/edit-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listings/report/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/add-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/all-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/paginate/data/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/search/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/edit-user-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.info.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/change-user-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/identity-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.identity.details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/identity-verify/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.identity.verify.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/identity-verify/decline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.identity.verify.decline',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/paginate/delete/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.paginate.delete.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/verification-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.verification.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/verification-request/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.identity.request.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/verification-request/search-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.identity.request.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/deactivated/users-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.deactivated.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/paginate/deactivated-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.paginate.deactivated',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/search/deactivated-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.search.deactivated',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/add-new-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategory/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategory/add-new-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategory/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategory/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategory/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/add-new-child-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/admin-get-dependent-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.select.subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/child-category/get-subcategory-by-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.subcategory.by.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/update-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update.addon.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/get-admin-markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.get.addon.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lnB1XrClKdoU8lCA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dynamic-page/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/home-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mBFKAvAVM0gBTlQY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/about-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zqs6K1v2of5T1282',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/contact-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v9GMze2xGH1PV94x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-builder/dynamic-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/map-settings/add-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.map.settings.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fyV4dv1V89lGxC4c',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/global-variant-navbar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.global.variant.navbar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::grHG1zYRlS3T6vmh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/global-variant-footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.global.variant.footer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U35K9zxyMRckbLoZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/color-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.color.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v0HC4Tyt1lFO9Du4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/typography-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cr7FMEQzCrns2c3K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/typography-settings/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.single',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/typography/custom/font/file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.font.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/typography/custom-font/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.typography.single',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/typography/custom/font/css/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.font.css.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets/markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets/update/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/widgets/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/mega-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mega.menu.item.select.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/form/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/form/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.bulk.action.form',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/media-upload/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.images.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/404-page-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.404.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1icBRDM7nGRWd31e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/maintains-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.maintains.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appearance-settings/maintains-page-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.maintains.page.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/all/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.read',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/search-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/add/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.notice.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.add.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notice.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notice.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notice/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notice.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/register-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.register.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/listing-create-page/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.create.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/listing-details-page/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.details.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/guest-listing/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.guest.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/user-public-profile/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.public.profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/basic-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fQI9s6fQXMUwlHTe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.smtp.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/update-smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.smtp.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/test-smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.smtp.settings.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/all-email-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.template.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/global-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.global.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/register/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.register.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/identity-verification/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.identity.verification.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/email-verify/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.verify.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/wallet-deposit/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.wallet.deposit.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/new-listing-approval/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.new.listing.approval.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/new-listing-publish/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.new.listing.publish.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/new-listing-unpublished/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.new.listing.unpublished.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/guest-listing-add/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.guest.add.listing.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/guest-listing-approve/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.guest.approve.listing.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-settings/user/guest-listing-publish/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.guest.publish.listing.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/reading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.reading',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5wLqbLlV97osKMrt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/site-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.site.identity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JFSes8N0hrbKxSoQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/basic-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.basic.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJei0LKf64colFia',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/seo-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.seo.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KdtSbRcMVxPmd419',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.scripts.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r2p9U8Q4X9VRKbO9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qz3z0IvTiV1ampCe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/custom-js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tVG9fuGlS4M1mean',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/sitemap-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nWx1PGUZ7W3FxmFC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/sitemap-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/gdpr-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.gdpr.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jgkK52kmhQVO7GJe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/license-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AvFga212PSxANQOs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/cache-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.cache.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74kVCEQx8dZufUt0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/database-upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.database.upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JtcCN7tTZ30Hi9lb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/license-setting-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.key.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/update-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.version.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/software-update-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.software.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/add-new-word' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.add.new.word',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/regenerate-source-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.regenerate.source.texts',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.alt.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.loadmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/debug-sentry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mwFhoy3SaZPQgRZV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nowpayments-webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nowpayments-webhook/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/identity-verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.identity.verification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/check-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account-deactive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.deactive',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notification/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notification.read',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.all.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.add.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/user-profile-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/favorite/listing/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.favorite.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-search-listings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-search-listings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fwi3jVYEr1sKP5Dn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ahg4rTvcsomJmn0K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forgot.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password-reset-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forgot.password.otp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password-reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forgot.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.facebook.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.google.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-name-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.name.availability',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.email.availability',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/phone-number-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.phone.number.availability',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/resend-verify-code-again' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'resend.verify.code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'au.state.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'au.city.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.new.tag',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-child-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.subcategory.with.child.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing/load-more/subs-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.listing.load.more.subcategories',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing/load-more/child-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.listing.load.more.child.categories',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-custom-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.form.builder.custom.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/favorite/listing-add-remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'listing.favorite.add.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/review-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.review.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home-search/listings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.home.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing/guest/add-listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guest.add.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing/guest/request-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guest.request.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/advertisement/click/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.home.advertisement.click.store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/advertisement/impression/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.home.advertisement.impression.store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.upload.media.file.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.upload.media.file.alt.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.upload.media.file.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.upload.media.file.loadmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.guest.upload.media.file.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.guest.upload.media.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.guest.upload.media.file.alt.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.guest.upload.media.file.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.guest.upload.media.file.loadmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhjRLxRKGz2TdHYd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/get/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.get.tags.by.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/blog-details-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.details.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/blog-details-settings-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.details.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/trashed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.trashed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/trashed/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.trashed.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/single-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.single.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x7DerFMlColLMxsl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/others-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.others.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dMbBLDuiOikAWyp2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/blog-approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tags/paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.brand',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/all-brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/search-brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/live/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.live.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/live/fetch-chat-member-record' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetch.chat.member.record',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/live/message-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.message.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/member/live/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.live.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/member/live/fetch-chat-user-record' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.fetch.chat.user.record',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/member/live/message-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.message.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pusher/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pusher.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/countrymanage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.countrymanage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/all-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/search-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/csv/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.import.csv.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.import.csv.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/country/csv/import/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.import.database',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/all-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/search-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/csv/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.import.csv.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.import.csv.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/state/csv/import/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.import.database',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/all-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/search-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/csv/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.import.csv.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.import.csv.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/city/csv/import/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.import.database',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/integrations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.integrations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/integrations-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.integration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/integrations-manage/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.integration.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/type/all-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/type/edit-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/type/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/type/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/type/search-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/all-membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/add-membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/search-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/search-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/get/active/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.active',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/get/inactive/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.inactive',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/get/manual/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.manual',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/update/manual/payment/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.update.manual.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/history/update/manual/payment/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.history.update.manual.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/history/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.history.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/user/history/search-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.history.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/free/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.free.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/purchase/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.purchase.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/renew/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.renew.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/active/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.active.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/inactive/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.inactive.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/manual-payment-complete/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.manual.payment.complete.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/email-settings/user/membership/manual-payment-complete/to-admin/template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email.user.membership.manual.payment.complete.to.admin.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/enquiry/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.form.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/enquiry/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.form.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/enquiry/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.form.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/enquiry/search-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.form.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/membership/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.membership.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/membership/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.membership.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/membership/search-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.membership.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/membership/business-hours/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.business.hours.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/enquiries/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.enquiries.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/enquiries/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.enquiries.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/enquiries/search-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.enquiries.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/visitor/enquiry/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'visitor.enquiry.form.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/buy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.membership.buy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/buy/cancel-static' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.buy.payment.cancel.static',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/renew' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/renew/cancel-static' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.renew.payment.cancel.static',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paypal.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytm.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paystack.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/mollie/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.mollie.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/stripe/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.stripe.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.razorpay.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/flutterwave/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.flutterwave.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.midtrans.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payfast.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cashfree.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.instamojo.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.marcadopago.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/squareup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.squareup.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cinetpay.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytabs.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.billplz.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.zitopay.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buy-membership/toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.toyyibpay.ipn.membership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paypal.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytm.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paystack.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/mollie/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.mollie.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/stripe/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.stripe.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.razorpay.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/flutterwave/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.flutterwave.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.midtrans.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payfast.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cashfree.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.instamojo.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.marcadopago.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/squareup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.squareup.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cinetpay.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytabs.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.billplz.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.zitopay.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/renew-membership/toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.toyyibpay.ipn.membership.renew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.single.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.new.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news-letter/newsletter/verify-mail-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.verify.mail.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news-letter/subscribe/by/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.subscription',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/paymentgateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.paymentgateways',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.paypal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/paytm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.paytm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.paystack',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.mollie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.midtrans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.cashfree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/instamojo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.instamojo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/marcadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.marcadopago',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/zitopay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.zitopay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/squareup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.squareup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/cinetpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.cinetpay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.paytabs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/billplz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.billplz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/toyyibpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.toyyibpay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.flutterwave',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/payfast' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.payfast',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/manual-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.manual_payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/cash-on-delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.cod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-settings/payment/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-gateway/currency-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.gateway.currency.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F2xiXrJWkyOefqwL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pluginmanage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0fzVrO4yzGoigjtH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugin-manage/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plugin.manage.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugin-manage/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plugin.manage.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AlunGqEEe5QNUdWx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugin-manage/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plugin.manage.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugin-manage/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plugin.manage.status.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/rolepermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.rolepermission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rolepermission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage/all-admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage/create/new-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage/change/admin/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage/permission/role/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage/permission/role/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/supportticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.supportticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/supportticket/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.department',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/edit-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.department.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/department-bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.department.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/pagination' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.delete.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/email-settings/user/support-ticket/to-admin-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.support.ticket.to.admin.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support-ticket/email-settings/user/support-ticket/to-user-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.support.ticket.to.user.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support-ticket/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support-ticket/pagination' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support-ticket/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/wallet/deposit-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.deposit.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/history/records' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/deposit/create-by-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.deposit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/search-wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/history/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.history.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet/history/search-wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.history.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.deposit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/deposit-cancel-static' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.deposit.payment.cancel.static',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/paginate/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.paginate.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/search-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wallet/deposit-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wallet.deposit.payment.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paypal.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytm.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paystack.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/mollie/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.mollie.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/stripe/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.stripe.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.razorpay.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/flutterwave/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.flutterwave.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.midtrans.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payfast.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cashfree.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.instamojo.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.marcadopago.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/squareup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.squareup.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.cinetpay.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.paytabs.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.billplz.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.zitopay.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/kineticpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kineticpay.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallet/toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.toyyibpay.ipn.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/download\\-update/([^/]++)/([^/]++)(*:116)|/admin/(?|a(?|ccount/(?|suspend/([^/]++)(*:164)|unsuspend/([^/]++)(*:190))|dvertisement/(?|edit/([^/]++)(*:228)|update/([^/]++)(*:251)|delete/([^/]++)(*:274)|change\\-status/([^/]++)(*:305))|ppearance\\-settings/(?|typography/c(?|ustom\\-font(?|/delete/([^/]++)(*:382)|\\-heading/change\\-status/([^/]++)(*:423))|hange\\-status/([^/]++)(*:454))|menu\\-(?|edit/([^/]++)(*:485)|update/([^/]++)(*:508)|de(?|lete/([^/]++)(*:534)|fault/([^/]++)(*:556)))|form/form\\-(?|edit/([^/]++)(*:593)|update(?:/([^/]++))?(*:621)|delete/([^/]++)(*:644))))|l(?|istings/(?|de(?|tails/([^/]++)(*:689)|lete/([^/]++)(*:710))|published/([^/]++)(*:737)|status/([^/]++)(*:760)|guest/delete/([^/]++)(*:789)|admin\\-(?|edit\\-listing(?:/([^/]++))?(*:834)|delete/([^/]++)(*:857)|published/([^/]++)(*:883)|status/([^/]++)(*:906))|report/(?|reason/delete/([^/]++)(*:947)|delete/([^/]++)(*:970)))|anguages/(?|words/(?|all/([^/]++)(*:1013)|update/([^/]++)(*:1037))|de(?|lete/([^/]++)(*:1065)|fault/([^/]++)(*:1088))))|user/(?|change\\-user\\-active\\-inactive\\-status/([^/]++)(*:1155)|d(?|elete/(?|([^/]++)(*:1185)|search\\-user(*:1206))|isable\\-2\\-factor\\-authentication/([^/]++)(*:1258))|permanent\\-delete/([^/]++)(*:1294)|user\\-restore(?:/([^/]++))?(*:1330)|verify\\-user\\-email/([^/]++)(*:1367))|c(?|ategory/(?|edit\\-category(?:/([^/]++))?(*:1420)|change\\-status/([^/]++)(*:1452)|delete/([^/]++)(*:1476))|hild\\-category/(?|edit\\-child\\-category(?:/([^/]++))?(*:1539)|change\\-status/([^/]++)(*:1571)|delete/([^/]++)(*:1595)))|subcategory/(?|edit\\-subcategory(?:/([^/]++))?(*:1652)|change\\-status/([^/]++)(*:1684)|delete/([^/]++)(*:1708))|dynamic\\-page/(?|edit/([^/]++)(*:1748)|update/([^/]++)(*:1772)|delete/(?|([^/]++)(*:1799)|lang/all/([^/]++)(*:1825)))|page\\-builder/dynamic\\-page/([^/]++)/([^/]++)(*:1881)|notice/(?|edit/([^/]++)(*:1913)|delete\\-user/([^/]++)(*:1943)|status/([^/]++)(*:1967))|general\\-settings/download\\-update/([^/]++)/([^/]++)(*:2029)|reset\\-password/([^/]++)/([^/]++)(*:2071))|/nowpayments\\-webhook/([^/]++)(?|(*:2114)|/edit(*:2128)|(*:2137))|/user/(?|account\\-deactive/cancel/([^/]++)(*:2189)|listing/(?|edit(?:/([^/]++))?(*:2227)|delete(?:/([^/]++))?(*:2256)|published\\-on\\-off/([^/]++)(*:2292)))|/custom\\-search\\-listings/([^/]++)(?|(*:2340)|/edit(*:2354)|(*:2363))|/listing(?|(?:/([^/]++))?(*:2398)|/(?|load\\-more\\-relevant(*:2431)|c(?|ategory(?:/([^/]++))?(*:2465)|hild\\-category(?:/([^/]++))?(*:2502))|sub\\-category(?:/([^/]++))?(*:2539)))|/profile(?:/([^/]++))?(*:2572)|/([^/]++)(*:2590)|/listing/report\\-add(*:2619)|/get\\-(?|state\\-by\\-country(?|(*:2658)|\\-ajax\\-search(*:2681))|city\\-by\\-city(*:2705))|/media\\-upload(*:2729)|/admin/(?|b(?|log/(?|edit/([^/]++)(*:2772)|update/([^/]++)(*:2796)|delete/all/lang/([^/]++)(*:2829)|trashed/(?|restore/([^/]++)(*:2865)|delete/([^/]++)(*:2889)))|rand/(?|edit\\-brand(?:/([^/]++))?(*:2933)|change\\-status/([^/]++)(*:2965)|delete/([^/]++)(*:2989)))|tags/delete/all/lang/([^/]++)(*:3029)|location/(?|c(?|ountry/(?|edit\\-country(?:/([^/]++))?(*:3091)|change\\-status/([^/]++)(*:3123)|delete/([^/]++)(*:3147))|ity/(?|edit\\-city(?:/([^/]++))?(*:3188)|change\\-status/([^/]++)(*:3220)|delete/([^/]++)(*:3244)))|state/(?|edit\\-state(?:/([^/]++))?(*:3289)|change\\-status/([^/]++)(*:3321)|delete/([^/]++)(*:3345)))|m(?|embership/(?|type/delete/([^/]++)(*:3393)|e(?|dit\\-membership/([^/]++)(*:3430)|nquiry/delete/([^/]++)(*:3461))|delete/([^/]++)(*:3486)|status/([^/]++)(*:3510)|user/(?|s(?|tatus/change/([^/]++)(*:3552)|end\\-email(?:/([^/]++))?(*:3585))|notification/read/unread/([^/]++)(*:3628)|history/membership/([^/]++)(*:3664)))|anage/(?|edit/admin/([^/]++)(*:3703)|delete/admin/([^/]++)(*:3733)|permission/role/(?|assign/([^/]++)(*:3776)|create/([^/]++)(*:3800)|delete/([^/]++)(*:3824))))|news\\-letter/delete/([^/]++)(*:3864)|support\\-ticket/(?|de(?|partment\\-change\\-status/([^/]++)(*:3930)|lete\\-(?|department/([^/]++)(*:3967)|ticket/([^/]++)(*:3991))|tails/([^/]++)(*:4015))|change\\-status/([^/]++)(*:4048))|wallet/(?|status/([^/]++)(*:4083)|history/records/status/([^/]++)(*:4123)))|/blog/(?|([^/]++)(*:4151)|post\\-blog\\-comment(*:4179)|category(?:/([^/]++))?(*:4210)|tags(?:/([^/]++))?(*:4237)|([^/]++)/comments(*:4263))|/user/(?|enquiries/delete/([^/]++)(*:4307)|support\\-ticket/details/([^/]++)(*:4348))|/news\\-letter/user/email/verify/([^/]++)(*:4398)|/rolepermission(?|(*:4425)|/([^/]++)(?|(*:4446)|/edit(*:4460)|(*:4469)))|/supportticket(?|(*:4497)|/([^/]++)(?|(*:4518)|/edit(*:4532)|(*:4541)))|/print\\-request(*:4567))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.download',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.suspend',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.unsuspend',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisement.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      382 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.delete.font.file',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.heading.font.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom.font.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.update',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.published.status.change',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.status.change',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.guest.listings.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit.listing',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.listings',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.published.status.change.by',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listings.status.change.by',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.reason.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.report.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.all',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.delete.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.disable._2fa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.permanent.delete',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.restore',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.verify.email',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.child.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subcategory.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete.lang.all',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notice.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.notice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notice.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.download.settings',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.show',
          ),
          1 => 
          array (
            0 => 'nowpayments_webhook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.edit',
          ),
          1 => 
          array (
            0 => 'nowpayments_webhook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.update',
          ),
          1 => 
          array (
            0 => 'nowpayments_webhook',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nowpayments-webhook.destroy',
          ),
          1 => 
          array (
            0 => 'nowpayments_webhook',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.account.deactive.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit.listing',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.delete.listing',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.published.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.show',
          ),
          1 => 
          array (
            0 => 'custom_search_listing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.edit',
          ),
          1 => 
          array (
            0 => 'custom_search_listing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.update',
          ),
          1 => 
          array (
            0 => 'custom_search_listing',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-search-listings.destroy',
          ),
          1 => 
          array (
            0 => 'custom_search_listing',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.listing.details',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.listing.load-more-relevant',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.show.listing.by.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.show.listing.by.child.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.show.listing.by.subcategory',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.user.profile',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.dynamic.page',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'listing.report.add',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.country.state',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.country.state.ajax.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.state.city',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.upload.media.file',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete.all.lang',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.trashed.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.trashed.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brand.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.tags.delete.all.lang',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.city.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.edit',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.type.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.form.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.email.sent',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.read.unread',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.membership.history',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.permission',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.permission.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.department.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.department.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ticket.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet.history.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.comment',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.tags',
            'tag_id' => NULL,
          ),
          1 => 
          array (
            0 => 'tag_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.load.comments',
          ),
          1 => 
          array (
            0 => 'blog_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.enquiry.form.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ticket.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.subscriber.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.show',
          ),
          1 => 
          array (
            0 => 'rolepermission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.edit',
          ),
          1 => 
          array (
            0 => 'rolepermission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.update',
          ),
          1 => 
          array (
            0 => 'rolepermission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rolepermission.destroy',
          ),
          1 => 
          array (
            0 => 'rolepermission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.show',
          ),
          1 => 
          array (
            0 => 'supportticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.edit',
          ),
          1 => 
          array (
            0 => 'supportticket',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.update',
          ),
          1 => 
          array (
            0 => 'supportticket',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supportticket.destroy',
          ),
          1 => 
          array (
            0 => 'supportticket',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DzHqJDoamFWgPPUD',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'license-activation',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'as' => 'license.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'license-activation-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'as' => 'license.activation.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.system.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'as' => 'check.system.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'download-update/{productId}/{tenant}',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'as' => 'update.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nj8gbgEa8Rt1JIDc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::Nj8gbgEa8Rt1JIDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yl8NvTLuk8ifowyD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006580000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Yl8NvTLuk8ifowyD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-dashboard',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@adminDashboard',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@adminDashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dashboard',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.user.graph.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard/getUserData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@getUserData',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@getUserData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dashboard',
        'where' => 
        array (
        ),
        'as' => 'admin.get.user.graph.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.listing.graph.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard/getListingData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@getListingData',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@getListingData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dashboard',
        'where' => 
        array (
        ),
        'as' => 'admin.get.listing.graph.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dark.mode.toggle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dark-mode-toggle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@darkModeToggle',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@darkModeToggle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dark.mode.toggle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@adminSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminDashboardController@adminSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminProfile',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WjQeMpF2v7lM0d7B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminProfileUpdate',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminProfileUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WjQeMpF2v7lM0d7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminPassword',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eVZVnJwzBd5gHbnJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminPasswordChange',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminProfileController@adminPasswordChange',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'generated::eVZVnJwzBd5gHbnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.suspend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/account/suspend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SuspendActiveController@suspend',
        'controller' => 'App\\Http\\Controllers\\Backend\\SuspendActiveController@suspend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.account.suspend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.unsuspend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/unsuspend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SuspendActiveController@unsuspend',
        'controller' => 'App\\Http\\Controllers\\Backend\\SuspendActiveController@unsuspend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/account',
        'where' => 
        array (
        ),
        'as' => 'admin.account.unsuspend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.all.listings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/user-all-listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@all_listings',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@all_listings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.user.all.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingDetails',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.user.all.approved' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/user-all/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-approved',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@userListingsAllApproved',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@userListingsAllApproved',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.user.all.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.published.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/published/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-published-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingPublishedStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingPublishedStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.published.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@searchListing',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@searchListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@listingDelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-listing-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserListingManageController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.guest.all.listings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/guest/all-listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:guest-listing-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@all_guest_listings',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@all_guest_listings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.guest.all.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.guest.listings.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/guest/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@searchListingGuest',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@searchListingGuest',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.guest.listings.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.guest.listings.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/guest/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@paginateGuest',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@paginateGuest',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.guest.listings.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.guest.all.approved' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/guest-all/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:guest-listing-all-approved',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@guestListingsAllApproved',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@guestListingsAllApproved',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.guest.all.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.guest.listings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/guest/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:guest-listing-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@listingGuestDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@listingGuestDelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.guest.listings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.guest.listing.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/guest/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:guest-listing-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@bulkGuestAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminGuestListingManageController@bulkGuestAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.guest.listing.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.listings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminAllListings',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminAllListings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.all.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.new.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/listings/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminAddListing',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminAddListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.add.new.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/listings/admin-edit-listing/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminEditListing',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminEditListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.edit.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.search.listings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/admin-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminSearchListing',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminSearchListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.search.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.paginate.listings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/admin-paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminPaginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminPaginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.paginate.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.listings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/admin-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminListingDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminListingDelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.listings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bulk.action.listing' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/admin-bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.bulk.action.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.published.status.change.by' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/admin-published/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-published-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminListingPublishedStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminListingPublishedStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.published.status.change.by',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listings.status.change.by' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/admin-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:admin-listing-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminChangeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminListingController@adminChangeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listings.status.change.by',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/reason/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:report-reason-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@all_reason',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@all_reason',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/reason/edit-reason',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:report-reason-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@edit_reason',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@edit_reason',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/reason/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:report-reason-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@delete_reason',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@delete_reason',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/reason/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:report-reason-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@bulk_action_reason',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@bulk_action_reason',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/reason/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.reason.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/reason/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@search_reason',
        'controller' => 'App\\Http\\Controllers\\Backend\\ReportReasonController@search_reason',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.report.reason.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-report-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@all_report',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@all_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/edit-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-report-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@edit_report',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@edit_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-report-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@delete_report',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@delete_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listings/report/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-report-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@bulk_action_report',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@bulk_action_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.report.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listings/report/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ListingReportController@search_report',
        'controller' => 'App\\Http\\Controllers\\Backend\\ListingReportController@search_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/listings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.report.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/user/add-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@add_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@add_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/all-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@all_users',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@all_users',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/paginate/data/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/search/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.info.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/edit-user-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@edit_info',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@edit_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.info.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/change-user-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-password-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@change_password',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@change_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.identity.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/identity-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_details',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.identity.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.identity.verify.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/identity-verify/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-verify-status',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_verify_status',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_verify_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.identity.verify.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.identity.verify.decline' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/identity-verify/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-verify-decline',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_verify_decline',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@identity_verify_decline',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.identity.verify.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/change-user-active-inactive-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@change_status',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@change_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@delete_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@delete_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.permanent.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/permanent-delete/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-permanent-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@permanent_delete',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@permanent_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.permanent.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/user/user-restore/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_restore',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_restore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.paginate.delete.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/paginate/delete/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@pagination_delete_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@pagination_delete_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.paginate.delete.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.delete.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/delete/search-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_delete_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_delete_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.delete.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.verification.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/verification-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_requests',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_requests',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.verification.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.identity.request.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/verification-request/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_request_pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_request_pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.identity.request.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.identity.request.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/verification-request/search-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_request_search_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@verification_request_search_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.identity.request.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.disable._2fa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/disable-2-factor-authentication/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@disable_2fa',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@disable_2fa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.disable._2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.verify.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/verify-user-email/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@verify_user_email',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@verify_user_email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.verify.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.deactivated.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/deactivated/users-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-deactivated-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_deactivated_all',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_deactivated_all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.deactivated.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.paginate.deactivated' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/paginate/deactivated-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_deactivated_pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@user_deactivated_pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.paginate.deactivated',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.search.deactivated' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/search/deactivated-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_deactivated_user',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManageController@search_deactivated_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.search.deactivated',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:advertisement-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:advertisement-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@new_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@new_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@store_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@store_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:advertisement-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@edit_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@edit_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@update_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@update_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:advertisement-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@delete_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@delete_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@bulk_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@search_advertisement',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@search_advertisement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@advertisement_paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@advertisement_paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisement.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:advertisement-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdvertisementController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/advertisement',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisement.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/category/add-new-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@addNewCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@addNewCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/category/edit-category/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@editCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@editCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@deleteCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@deleteCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:category-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@searchCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@searchCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CategoryController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\CategoryController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
        'as' => 'admin.category.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategory/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/subcategory/add-new-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@addNewSubcategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@addNewSubcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/subcategory/edit-subcategory/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@editSubcategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@editSubcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategory/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategory/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@deleteSubcategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@deleteSubcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategory/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:subcategory-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategory/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@searchSubCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@searchSubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subcategory.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategory/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\SubCategoryController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/subcategory',
        'where' => 
        array (
        ),
        'as' => 'admin.subcategory.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/child-category/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/child-category/add-new-child-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@addNewChildCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@addNewChildCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/child-category/edit-child-category/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@editChildCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@editChildCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/child-category/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/child-category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@deleteChildCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@deleteChildCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/child-category/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:child-category-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/child-category/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@searchChildCategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@searchChildCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.child.category.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/child-category/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.child.category.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.select.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/child-category/admin-get-dependent-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@getSubcategory',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@getSubcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.select.subcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.subcategory.by.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/child-category/get-subcategory-by-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@getSubCategoryByCategoryId',
        'controller' => 'App\\Http\\Controllers\\Backend\\ChildCategoryController@getSubCategoryByCategoryId',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/child-category',
        'where' => 
        array (
        ),
        'as' => 'admin.get.subcategory.by.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAddonContent',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAddonContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@storeNewAddonContent',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@storeNewAddonContent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@delete',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update.addon.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/update-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAddonOrder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAddonOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update.addon.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.get.addon.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/get-admin-markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@getAdminPanelAddonMarkup',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@getAdminPanelAddonMarkup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.get.addon.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:dynamic-page-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:dynamic-page-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@newPage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@newPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lnB1XrClKdoU8lCA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@storeNewPage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@storeNewPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'generated::lnB1XrClKdoU8lCA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:dynamic-page-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@editPage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@editPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@updatePage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@updatePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:dynamic-page-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@deletePage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@deletePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete.lang.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/delete/lang/all/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@deletePageLangAll',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@deletePageLangAll',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete.lang.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/dynamic-page/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:dynamic-page-bulk-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@bulkAction',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@bulkAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@searchPage',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@searchPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dynamic-page/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PagesController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\PagesController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/dynamic-page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@homePageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@homePageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.home.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mBFKAvAVM0gBTlQY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateHomePageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateHomePageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::mBFKAvAVM0gBTlQY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@aboutPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@aboutPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.about.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zqs6K1v2of5T1282' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAboutPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateAboutPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::Zqs6K1v2of5T1282',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@contactPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@contactPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v9GMze2xGH1PV94x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateContactPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateContactPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::v9GMze2xGH1PV94x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-builder/dynamic-page/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@dynamicPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@dynamicPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-builder/dynamic-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'auth:admin',
        ),
        0 => 'setlang',
        'uses' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateDynamicPageBuilder',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageBuilderController@updateDynamicPageBuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.map.settings.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/map-settings/add-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:google-map-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MapSettings@addMapSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\MapSettings@addMapSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/map-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.map.settings.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fyV4dv1V89lGxC4c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/map-settings/add-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MapSettings@UpdateMapSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\MapSettings@UpdateMapSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/map-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fyV4dv1V89lGxC4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.global.variant.navbar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/global-variant-navbar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:navbar-global-variant',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@globalVariantNavbar',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@globalVariantNavbar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.global.variant.navbar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::grHG1zYRlS3T6vmh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/global-variant-navbar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGlobalVariantNavbar',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGlobalVariantNavbar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::grHG1zYRlS3T6vmh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.global.variant.footer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/global-variant-footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:footer-global-variant',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@globalVariantFooter',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@globalVariantFooter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.global.variant.footer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U35K9zxyMRckbLoZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/global-variant-footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGlobalVariantFooter',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGlobalVariantFooter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::U35K9zxyMRckbLoZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.color.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:color-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@colorSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@colorSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.color.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v0HC4Tyt1lFO9Du4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateColorSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateColorSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::v0HC4Tyt1lFO9Du4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:typography-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@typographySettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@typographySettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cr7FMEQzCrns2c3K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@updateTypographySettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@updateTypographySettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::cr7FMEQzCrns2c3K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.single' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography-settings/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:typography-single-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@getSingleFontVariant',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@getSingleFontVariant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.font.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/custom/font/file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:font-add-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@addCustomFont',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@addCustomFont',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.font.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.typography.single' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/custom-font/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@getCustomSingleFont',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@getCustomSingleFont',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.typography.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.font.css.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/custom/font/css/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@updateCssCustomFont',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@updateCssCustomFont',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.font.css.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.delete.font.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/custom-font/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:custom-font-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@deleteFontFile',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@deleteFontFile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.delete.font.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.font.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:custom-font-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@changeStatusCustomFont',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@changeStatusCustomFont',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.font.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom.heading.font.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/typography/custom-font-heading/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\CustomFontController@changeStatusCustomFontHeading',
        'controller' => 'App\\Http\\Controllers\\Backend\\CustomFontController@changeStatusCustomFontHeading',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.custom.heading.font.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/widgets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:widgets-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/widgets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:widgets-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@newWidget',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@newWidget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/widgets/markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@widgetMarkup',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@widgetMarkup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/widgets/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@updateWidget',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@updateWidget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/widgets/update/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@updateOrderWidget',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@updateOrderWidget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/widgets/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:widgets-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\WidgetsController@deleteWidget',
        'controller' => 'App\\Http\\Controllers\\Backend\\WidgetsController@deleteWidget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:menu-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:menu-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@storeNewMenu',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@storeNewMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/menu-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:menu-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@editMenu',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@editMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/menu-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@updateMenu',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@updateMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/menu-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:menu-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@deleteMenu',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@deleteMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/menu-default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@setDefaultMenu',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@setDefaultMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mega.menu.item.select.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/mega-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MenuController@megaMenuItemSelectMarkup',
        'controller' => 'App\\Http\\Controllers\\Backend\\MenuController@megaMenuItemSelectMarkup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.mega.menu.item.select.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/form/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:form-builder-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@form',
        'controller' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings/form',
        'where' => 
        array (
        ),
        'as' => 'admin.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/form/form-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:form-builder-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@edit_form',
        'controller' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@edit_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings/form',
        'where' => 
        array (
        ),
        'as' => 'admin.form.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/form/form-update/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@update_form',
        'controller' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@update_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings/form',
        'where' => 
        array (
        ),
        'as' => 'admin.form.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/form/form-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:form-builder-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@delete_form',
        'controller' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@delete_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings/form',
        'where' => 
        array (
        ),
        'as' => 'admin.form.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.bulk.action.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/form/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:form-builder-bulk.delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Backend\\FormBuilderController@bulk_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings/form',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.bulk.action.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.images.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/media-upload/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:media-upload',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@allUploadMediaImagesForPage',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@allUploadMediaImagesForPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.images.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:media-upload-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@deleteUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@deleteUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.404.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:404-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Manage404PageController@error404pageSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\Manage404PageController@error404pageSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.404.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1icBRDM7nGRWd31e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Manage404PageController@update404PageSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\Manage404PageController@update404PageSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::1icBRDM7nGRWd31e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.maintains.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appearance-settings/maintains-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:maintains-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MaintainsPageController@maintainsPageSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\MaintainsPageController@maintainsPageSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.maintains.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.maintains.page.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appearance-settings/maintains-page-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MaintainsPageController@updateMaintainsPageSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\MaintainsPageController@updateMaintainsPageSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/appearance-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.maintains.page.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notifications-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@all_notification',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@all_notification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.read' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/all/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@read_notification',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@read_notification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.read',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/search-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@search_notification',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@search_notification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@pagination',
        'controller' => 'App\\Http\\Controllers\\Backend\\AdminNotificationController@pagination',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
        'as' => 'admin.notification.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notice/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notice-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@allNotice',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@allNotice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.all.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.notice.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notice/add/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notice-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@addNoticePage',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@addNoticePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.add.notice.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.add.notice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notice/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@addNotice',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@addNotice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.add.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notice.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notice/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notice-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@noticeEdit',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@noticeEdit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.notice.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notice.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@noticeUpdate',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@noticeUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.notice.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.notice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notice/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notice-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@newNoticeDelete',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@newNoticeDelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notice.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notice/status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:notice-status-change',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@changeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.notice.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notice.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notice/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@searchNotice',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@searchNotice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.notice.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notice.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notice/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\NoticeController@paginate',
        'controller' => 'App\\Http\\Controllers\\Backend\\NoticeController@paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/notice',
        'where' => 
        array (
        ),
        'as' => 'admin.notice.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login.register.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/register-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:login-register-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@loginRegisterPageSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@loginRegisterPageSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.login.register.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.create.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/listing-create-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-create-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingCreateSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingCreateSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.create.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.details.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/listing-details-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-details-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingDetailsSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingDetailsSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.details.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.guest.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/guest-listing/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:listing-guest-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingGuestSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@listingGuestSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.guest.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.public.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/user-public-profile/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:user-public-profile-page-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@userPublicProfileSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\PageSettingsController@userPublicProfileSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/page-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.user.public.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fQI9s6fQXMUwlHTe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@updateEmailSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@updateEmailSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fQI9s6fQXMUwlHTe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.smtp.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:smtp-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@smtpSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@smtpSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.smtp.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.smtp.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-settings/update-smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@updateSmtpSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@updateSmtpSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.smtp.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.smtp.settings.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-settings/test-smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@testSmtpSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailSettingsController@testSmtpSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.smtp.settings.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.template.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/all-email-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@allEmailTemplates',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@allEmailTemplates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.template.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.global.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/global-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@globalEmailTemplateSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@globalEmailTemplateSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.global.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.register.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/register/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userRegisterTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userRegisterTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.register.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.identity.verification.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/identity-verification/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userIdentityVerificationTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userIdentityVerificationTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.identity.verification.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.verify.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/email-verify/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userEmailVerifyTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userEmailVerifyTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.verify.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.wallet.deposit.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/wallet-deposit/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userWalletDepositTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userWalletDepositTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.wallet.deposit.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.new.listing.approval.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/new-listing-approval/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingApprovalTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingApprovalTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.new.listing.approval.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.new.listing.publish.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/new-listing-publish/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingPublishTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingPublishTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.new.listing.publish.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.new.listing.unpublished.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/new-listing-unpublished/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingUnpublishedTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userNewListingUnpublishedTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.new.listing.unpublished.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.guest.add.listing.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/guest-listing-add/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestAddNewListingTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestAddNewListingTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.guest.add.listing.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.guest.approve.listing.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/guest-listing-approve/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestApproveListingTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestApproveListingTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.guest.approve.listing.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.guest.publish.listing.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/email-settings/user/guest-listing-publish/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestPublishListingTemplate',
        'controller' => 'App\\Http\\Controllers\\Backend\\EmailTemplateController@userGuestPublishListingTemplate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/email-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.email.user.guest.publish.listing.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.reading' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:reading-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@reading',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@reading',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.reading',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5wLqbLlV97osKMrt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateReading',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateReading',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::5wLqbLlV97osKMrt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.site.identity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:site-identity-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@siteIdentity',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@siteIdentity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.site.identity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JFSes8N0hrbKxSoQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSiteIdentity',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSiteIdentity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::JFSes8N0hrbKxSoQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.basic.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:basic-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@basicSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@basicSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.basic.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJei0LKf64colFia' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateBasicSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateBasicSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::gJei0LKf64colFia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.seo.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:seo-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@seoSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@seoSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.seo.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KdtSbRcMVxPmd419' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSeoSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSeoSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::KdtSbRcMVxPmd419',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.scripts.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:scripts-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@scriptsSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@scriptsSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.scripts.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r2p9U8Q4X9VRKbO9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateScriptsSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateScriptsSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::r2p9U8Q4X9VRKbO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:custom-css-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@customCssSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@customCssSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.css',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qz3z0IvTiV1ampCe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCustomCssSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCustomCssSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Qz3z0IvTiV1ampCe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:custom-js-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@customJsSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@customJsSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.js',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tVG9fuGlS4M1mean' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCustomJsSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCustomJsSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::tVG9fuGlS4M1mean',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:sitemap-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@sitemapSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@sitemapSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nWx1PGUZ7W3FxmFC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSitemapSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateSitemapSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::nWx1PGUZ7W3FxmFC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/sitemap-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:sitemap-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@deleteSitemapSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@deleteSitemapSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.gdpr.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:gdpr-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@gdprSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@gdprSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.gdpr.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jgkK52kmhQVO7GJe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGdprCookieSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateGdprCookieSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jgkK52kmhQVO7GJe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:license-setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@licenseSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@licenseSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AvFga212PSxANQOs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateLicenseSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateLicenseSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::AvFga212PSxANQOs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.cache.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:cache-setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@cacheSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@cacheSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.cache.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::74kVCEQx8dZufUt0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCacheSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateCacheSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::74kVCEQx8dZufUt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.database.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:database-upgrade-setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@databaseUpgrade',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@databaseUpgrade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.database.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JtcCN7tTZ30Hi9lb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@databaseUpgradePost',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@databaseUpgradePost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::JtcCN7tTZ30Hi9lb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.key.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/license-setting-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:license-key-generate',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@licenseKeyGenerate',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@licenseKeyGenerate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.key.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.version.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/update-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:update-version-check',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateVersionCheck',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateVersionCheck',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.version.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.download.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/download-update/{productId}/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateDownloadLatestVersion',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@updateDownloadLatestVersion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.download.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.software.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/software-update-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:software-update-settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@softwareUpdateCheckSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\GeneralSettingsController@softwareUpdateCheckSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.software.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:languages-list',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/words/all/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:languages-words-edit',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@allEditWords',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@allEditWords',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/words/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@updateWords',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@updateWords',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:languages-add',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:languages-delete',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@delete',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@makeDefault',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@makeDefault',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
          5 => 'permission:languages-clone',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@cloneLanguages',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@cloneLanguages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.add.new.word' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/add-new-word',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@addNewWords',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@addNewWords',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.add.new.word',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.regenerate.source.texts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/regenerate-source-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\LanguageController@regenerateSourceText',
        'controller' => 'App\\Http\\Controllers\\Backend\\LanguageController@regenerateSourceText',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.regenerate.source.texts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@allUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@allUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@uploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@uploadMediaFile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@altChangeUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@altChangeUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@getImageForLoadmore',
        'controller' => 'App\\Http\\Controllers\\Backend\\MediaUploadController@getImageForLoadmore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwFhoy3SaZPQgRZV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'debug-sentry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:67:"function () {
    throw new \\Exception(\'My first Sentry error!\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007570000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mwFhoy3SaZPQgRZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nowpayments-webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.index',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@index',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nowpayments-webhook/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.create',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@create',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nowpayments-webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.store',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@store',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nowpayments-webhook/{nowpayments_webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.show',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@show',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nowpayments-webhook/{nowpayments_webhook}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.edit',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@edit',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'nowpayments-webhook/{nowpayments_webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.update',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@update',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nowpayments-webhook.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nowpayments-webhook/{nowpayments_webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'nowpayments-webhook.destroy',
        'uses' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@destroy',
        'controller' => 'App\\Http\\Controllers\\Console\\NowpaymentsWebhookController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'user.payments.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\PaymentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@logout',
        'as' => 'user.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@profile',
        'as' => 'user.profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@edit_profile',
        'as' => 'user.profile.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.identity.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/profile/identity-verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@identity_verification',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@identity_verification',
        'as' => 'user.identity.verification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/check-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@check_password',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@check_password',
        'as' => 'user.password.check',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/profile/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@change_password',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\UserController@change_password',
        'as' => 'user.password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/account-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@userAccountSetting',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@userAccountSetting',
        'as' => 'user.account.settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.deactive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/account-deactive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDeactive',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDeactive',
        'as' => 'user.account.deactive',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.deactive.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/account-deactive/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDeactiveCancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDeactiveCancel',
        'as' => 'user.account.deactive.cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.account.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/account/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDelete',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@accountDelete',
        'as' => 'user.account.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notification.read' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notification/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\NotificationController@read_notification',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\NotificationController@read_notification',
        'as' => 'user.notification.read',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\DashboardController@dashboard',
        'as' => 'user.dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.all.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@allListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@allListing',
        'as' => 'user.all.listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/listing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.add.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/listing/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@addListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@addListing',
        'as' => 'user.add.listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/listing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.edit.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/listing/edit/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@editListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@editListing',
        'as' => 'user.edit.listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/listing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.delete.listing' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/listing/delete/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@deleteListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@deleteListing',
        'as' => 'user.delete.listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/listing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.published.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/listing/published-on-off/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@listingPublishedStatus',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingController@listingPublishedStatus',
        'as' => 'user.listing.published.status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user/listing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/user-profile-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@userProfileVerify',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\AccountSettingController@userProfileVerify',
        'as' => 'user.profile.verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.favorite.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/favorite/listing/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingFavoriteController@ListingFavoriteAll',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingFavoriteController@ListingFavoriteAll',
        'as' => 'user.listing.favorite.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-search-listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-search-listings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'custom-search-listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-search-listings/{custom_search_listing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-search-listings/{custom_search_listing}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'custom-search-listings/{custom_search_listing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-search-listings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'custom-search-listings/{custom_search_listing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'custom-search-listings.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CustomSearchListingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fwi3jVYEr1sKP5Dn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fwi3jVYEr1sKP5Dn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@AdminResetPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@AdminResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ahg4rTvcsomJmn0K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@sendAdminForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@sendAdminForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ahg4rTvcsomJmn0K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@userLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@userLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forgot.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@forgetPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@forgetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forgot.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forgot.password.otp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'password-reset-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@passwordResetOtp',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@passwordResetOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forgot.password.otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forgot.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'password-reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@passwordReset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forgot.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@facebook_callback',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@facebook_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facebook.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.facebook.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@facebook_redirect',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@facebook_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.facebook.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@google_callback',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@google_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'google.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.google.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@google_redirect',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SocialLoginController@google_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.google.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.name.availability' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-name-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@userNameAvailability',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@userNameAvailability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.name.availability',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.email.availability' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@emailAvailability',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@emailAvailability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.email.availability',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.phone.number.availability' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'phone-number-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@phoneNumberAvailability',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@phoneNumberAvailability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.phone.number.availability',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@userRegister',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@userRegister',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@emailVerify',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@emailVerify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'email.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'resend.verify.code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'resend-verify-code-again',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@resendCode',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@resendCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'resend.verify.code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'au.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'setlang',
          5 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Common\\AdminUserController@get_country_state',
        'controller' => 'App\\Http\\Controllers\\Common\\AdminUserController@get_country_state',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'au.state.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'au.city.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'setlang',
          5 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Common\\AdminUserController@get_state_city',
        'controller' => 'App\\Http\\Controllers\\Common\\AdminUserController@get_state_city',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'au.city.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'setlang',
          5 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Common\\GetCategoryController@get_sub_category',
        'controller' => 'App\\Http\\Controllers\\Common\\GetCategoryController@get_sub_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.subcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.new.tag' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-new-tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'setlang',
          5 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Common\\NewTagAddController@addNewTag',
        'controller' => 'App\\Http\\Controllers\\Common\\NewTagAddController@addNewTag',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.new.tag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.subcategory.with.child.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-child-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'setlang',
          5 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Common\\GetCategoryController@get_child_category',
        'controller' => 'App\\Http\\Controllers\\Common\\GetCategoryController@get_child_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.subcategory.with.child.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.listing.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendListingController@frontendListingDetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendListingController@frontendListingDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.listing.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.listing.load-more-relevant' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/load-more-relevant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendListingController@loadMoreListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendListingController@loadMoreListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.listing.load-more-relevant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.show.listing.by.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/category/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsByCategory',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsByCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.show.listing.by.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.show.listing.by.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/sub-category/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsBySubCategory',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsBySubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.show.listing.by.subcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.show.listing.by.child.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/child-category/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsByChildCategory',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@showListingsByChildCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.show.listing.by.child.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.listing.load.more.subcategories' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/load-more/subs-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@loadMoreSubCategories',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@loadMoreSubCategories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.listing.load.more.subcategories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.listing.load.more.child.categories' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/load-more/child-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@loadMoreChildCategories',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryWiseListingController@loadMoreChildCategories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'frontend.listing.load.more.child.categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendUserProfileController@frontendUserProfileView',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendUserProfileController@frontendUserProfileView',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'about.user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.form.builder.custom.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-custom-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendFormController@custom_form_builder_message',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendFormController@custom_form_builder_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.form.builder.custom.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@home_page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@home_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.dynamic.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@dynamic_single_page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@dynamic_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.dynamic.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'listing.favorite.add.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'favorite/listing-add-remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\ListingFavoriteController@listingFavoriteAddRemove',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\ListingFavoriteController@listingFavoriteAddRemove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'listing.favorite.add.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'listing.report.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/report-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ListingReportController@listingReportAdd',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ListingReportController@listingReportAdd',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'listing.report.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.review.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/review-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\UserReviewController@listingReviewAdd',
        'controller' => 'App\\Http\\Controllers\\Frontend\\UserReviewController@listingReviewAdd',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.review.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.home.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home-search/listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@home_search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@home_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.home.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.country.state' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-state-by-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getState',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.country.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.country.state.ajax.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-state-by-country-ajax-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getStateAjaxSearch',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getStateAjaxSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.country.state.ajax.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.state.city' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-city-by-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getCity',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendSearchController@getCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.state.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'guest.add.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'listing/guest/add-listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\GuestListingController@guestAddListing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\GuestListingController@guestAddListing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'guest.add.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'guest.request.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/guest/request-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\GuestListingController@guestRequestCheck',
        'controller' => 'App\\Http\\Controllers\\Frontend\\GuestListingController@guestRequestCheck',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/listing',
        'where' => 
        array (
        ),
        'as' => 'guest.request.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.home.advertisement.click.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/advertisement/click/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendAdvertisementController@home_advertisement_click_store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendAdvertisementController@home_advertisement_click_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.home.advertisement.click.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.home.advertisement.impression.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/advertisement/impression/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendAdvertisementController@home_advertisement_impression_store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendAdvertisementController@home_advertisement_impression_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.home.advertisement.impression.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth',
          5 => 'inactiveuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@allUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@allUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth',
          5 => 'inactiveuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@uploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@uploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth',
          5 => 'inactiveuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@altChangeUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@altChangeUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth',
          5 => 'inactiveuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@deleteUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@deleteUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'auth',
          5 => 'inactiveuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@getImageForLoadmore',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\MediaUploadController@getImageForLoadmore',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.guest.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'guest_media_upload_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@allUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@allUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\Guest',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.guest.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.guest.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'guest_media_upload_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@uploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@uploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\Guest',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.guest.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.guest.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'guest_media_upload_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@altChangeUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@altChangeUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\Guest',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.guest.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.guest.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'guest_media_upload_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@deleteUploadMediaFile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@deleteUploadMediaFile',
        'namespace' => 'App\\Http\\Controllers\\Guest',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.guest.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.guest.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest/media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
          4 => 'guest_media_upload_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@getImageForLoadmore',
        'controller' => 'App\\Http\\Controllers\\Frontend\\User\\GuestMediaUploadController@getImageForLoadmore',
        'namespace' => 'App\\Http\\Controllers\\Guest',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'web.guest.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b810000000000000000";}}',
        'as' => 'api.blog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-list',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@index',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@index',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.all.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-add',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@newBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@newBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UhjRLxRKGz2TdHYd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@storeNewBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@storeNewBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::UhjRLxRKGz2TdHYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.get.tags.by.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/get/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@getTagsByAjax',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@getTagsByAjax',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.get.tags.by.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-edit',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@editBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@editBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-clone',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@cloneBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@cloneBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete.all.lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/delete/all/lang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@deleteBlogAllLang',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@deleteBlogAllLang',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete.all.lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-bulk-delete',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@bulkActionBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@bulkActionBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.details.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/blog-details-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-settings',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogDetailsSettings',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogDetailsSettings',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.details.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.details.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/blog-details-settings-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogDetailsSettingsUpdate',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogDetailsSettingsUpdate',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.details.settings.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@searchBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@searchBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@paginate',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@paginate',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.trashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/trashed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-trashed-list',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@trashedBlogs',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@trashedBlogs',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.trashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/trashed/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-trashed-restore',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@restoreTrashedBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@restoreTrashedBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.trashed.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.trashed.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/trashed/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-trashed-delete',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@deleteTrashedBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@deleteTrashedBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.trashed.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.trashed.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/trashed/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:blog-trashed-bulk-delete',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@trashedBulkActionBlog',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@trashedBulkActionBlog',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.trashed.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.single.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogSinglePageSettings',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogSinglePageSettings',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.single.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x7DerFMlColLMxsl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlogSinglePageSettings',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlogSinglePageSettings',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::x7DerFMlColLMxsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.others.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/others-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogOthersPageSettings',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogOthersPageSettings',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.others.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dMbBLDuiOikAWyp2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/others-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlogOthersPageSettings',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@updateBlogOthersPageSettings',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::dMbBLDuiOikAWyp2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/blog-approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogApprove',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogController@blogApprove',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:tag-list',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@index',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@index',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tags/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@newTags',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@newTags',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tags/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@updateTags',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@updateTags',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.delete.all.lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tags/delete/all/lang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@deleteTagsAllLang',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@deleteTagsAllLang',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.delete.all.lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tags/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:tag-bulk-delete',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@bulkAction',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@bulkAction',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@searchTags',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@searchTags',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.tags.paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tags/paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@paginateTag',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Backend\\BlogTagsController@paginateTag',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers',
        'prefix' => '/admin/tags',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.tags.paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@blog_single',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@blog_single',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blog/post-blog-comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@blog_comment',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@blog_comment',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.comment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/category/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@category_wise_blog_page',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@category_wise_blog_page',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.tags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/tags/{tag_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@tags_wise_blog_page',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@tags_wise_blog_page',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.tags',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.load.comments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blog_id}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@loadMoreComments',
        'controller' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend\\FrontendBlogController@loadMoreComments',
        'namespace' => 'Modules\\Blog\\app\\Http\\Controllers\\Frontend',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.load.comments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.brand' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bcc0000000000000000";}}',
        'as' => 'api.brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/brand/all-brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:brand-list',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@all_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@all_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/edit-brand/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:brand-edit',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@edit_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@edit_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:brand-status-change',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@change_status_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@change_status_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:brand-delete',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@delete_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@delete_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:brand-bulk-delete',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@bulk_action_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@bulk_action_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@pagination',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@pagination',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brand.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand/search-brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@search_brand',
        'controller' => 'Modules\\Brand\\app\\Http\\Controllers\\BrandController@search_brand',
        'namespace' => 'Modules\\Brand\\app\\Http\\Controllers',
        'prefix' => '/admin/brand',
        'where' => 
        array (
        ),
        'as' => 'admin.brand.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bdb0000000000000000";}}',
        'as' => 'api.chat',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.live.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/live/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@live_chat',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@live_chat',
        'as' => 'user.live.chat',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetch.chat.member.record' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/live/fetch-chat-member-record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@fetch_chat_record',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@fetch_chat_record',
        'as' => 'user.fetch.chat.member.record',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.message.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/live/message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@message_send',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\ChatController@message_send',
        'as' => 'user.message.send',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.live.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/member/live/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@live_chat',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@live_chat',
        'as' => 'member.live.chat',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/member/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.fetch.chat.user.record' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/member/live/fetch-chat-user-record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@fetch_chat_record',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@fetch_chat_record',
        'as' => 'member.fetch.chat.user.record',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/member/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.message.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/member/live/message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@message_send',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\MemberChatController@message_send',
        'as' => 'member.message.send',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/user/member/live',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pusher.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/pusher/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:live-chat-settings',
        ),
        'uses' => 'Modules\\Chat\\app\\Http\\Controllers\\Backend\\PusherSettingsController@pusher_settings',
        'controller' => 'Modules\\Chat\\app\\Http\\Controllers\\Backend\\PusherSettingsController@pusher_settings',
        'namespace' => 'Modules\\Chat\\app\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.pusher.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.countrymanage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/countrymanage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bea0000000000000000";}}',
        'as' => 'api.countrymanage',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/location/country/all-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-list',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@all_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@all_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/edit-country/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-edit',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@edit_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@edit_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-status-change',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@change_status_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@change_status_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@delete_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@delete_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-bulk-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@bulk_action_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@bulk_action_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/country/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@pagination',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@pagination',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/country/search-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@search_country',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@search_country',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.import.csv.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/country/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:country-csv-file-import',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.import.csv.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.import.csv.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@update_import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@update_import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.import.csv.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.import.database' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/country/csv/import/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@import_to_database_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CountryController@import_to_database_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/country',
        'where' => 
        array (
        ),
        'as' => 'admin.country.import.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/location/state/all-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-list',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@all_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@all_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/edit-state/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-edit',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@edit_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@edit_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-status-change',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@change_status_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@change_status_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@delete_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@delete_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-bulk-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@bulk_action_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@bulk_action_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/state/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@pagination',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@pagination',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/state/search-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@search_state',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@search_state',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.import.csv.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/state/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:state-csv-file-import',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.import.csv.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.import.csv.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@update_import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@update_import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.import.csv.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.import.database' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/state/csv/import/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@import_to_database_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\StateController@import_to_database_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/state',
        'where' => 
        array (
        ),
        'as' => 'admin.state.import.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/location/city/all-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-list',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@all_city',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@all_city',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/edit-city/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-edit',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@edit_city',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@edit_city',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-status-change',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@city_status',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@city_status',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@delete_city',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@delete_city',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-bulk-delete',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@bulk_action_city',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@bulk_action_city',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.delete.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/city/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@pagination',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@pagination',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.paginate.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/city/search-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@search_city',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@search_city',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.import.csv.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/city/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:city-csv-file-import',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.import.csv.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.import.csv.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/csv/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@update_import_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@update_import_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.import.csv.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.city.import.database' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/city/csv/import/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@import_to_database_settings',
        'controller' => 'Modules\\CountryManage\\app\\Http\\Controllers\\CityController@import_to_database_settings',
        'namespace' => 'Modules\\CountryManage\\app\\Http\\Controllers',
        'prefix' => 'admin/location/city',
        'where' => 
        array (
        ),
        'as' => 'admin.city.import.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.integrations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/integrations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c100000000000000000";}}',
        'as' => 'api.integrations',
        'namespace' => 'Modules\\Integrations\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.integration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/integrations-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:integration-list',
        ),
        'uses' => 'Modules\\Integrations\\app\\Http\\Controllers\\IntegrationsController@store',
        'controller' => 'Modules\\Integrations\\app\\Http\\Controllers\\IntegrationsController@store',
        'namespace' => 'Modules\\Integrations\\app\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.integration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.integration.activation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/integrations-manage/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Integrations\\app\\Http\\Controllers\\IntegrationsController@activate',
        'controller' => 'Modules\\Integrations\\app\\Http\\Controllers\\IntegrationsController@activate',
        'namespace' => 'Modules\\Integrations\\app\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.integration.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c1a0000000000000000";}}',
        'as' => 'api.membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/type/all-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-type-list',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@all_type',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@all_type',
        'as' => 'admin.membership.type.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/type/edit-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-type-edit',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@edit_type',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@edit_type',
        'as' => 'admin.membership.type.edit',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/type/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-type-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@delete_type',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@delete_type',
        'as' => 'admin.membership.type.delete',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/type/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-type-bulk-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@bulk_action_type',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@bulk_action_type',
        'as' => 'admin.membership.type.delete.bulk.action',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/type/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@pagination',
        'as' => 'admin.membership.type.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.type.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/type/search-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@search_type',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipTypeController@search_type',
        'as' => 'admin.membership.type.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/all-membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-list',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@all_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@all_membership',
        'as' => 'admin.membership.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/add-membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-add',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@add_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@add_membership',
        'as' => 'admin.membership.add',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/edit-membership/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-edit',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@edit_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@edit_membership',
        'as' => 'admin.membership.edit',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@delete_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@delete_membership',
        'as' => 'admin.membership.delete',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-status-change',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@status',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@status',
        'as' => 'admin.membership.status',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-bulk-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@bulk_action_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@bulk_action_membership',
        'as' => 'admin.membership.delete.bulk.action',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@pagination',
        'as' => 'admin.membership.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/search-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@search_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipController@search_membership',
        'as' => 'admin.membership.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/admin/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.membership.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:membership-settings',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipSettingsController@membership_settings',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipSettingsController@membership_settings',
        'as' => 'admin.membership.settings',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-list',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@all_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@all_membership',
        'as' => 'admin.user.membership.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@pagination',
        'as' => 'admin.user.membership.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/search-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@search_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@search_membership',
        'as' => 'admin.user.membership.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/user/status/change/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-status-change',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@change_status',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@change_status',
        'as' => 'admin.user.membership.status',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/get/active/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-active',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@active_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@active_membership',
        'as' => 'admin.user.membership.active',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.inactive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/get/inactive/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-inactive',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@inactive_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@inactive_membership',
        'as' => 'admin.user.membership.inactive',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.manual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/get/manual/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-manual',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@manual_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@manual_membership',
        'as' => 'admin.user.membership.manual',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.read.unread' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/notification/read/unread/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@read_unread',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@read_unread',
        'as' => 'admin.user.membership.read.unread',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.update.manual.payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/user/update/manual/payment/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:user-membership-manual-payment-status-change',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@update_manual_payment',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@update_manual_payment',
        'as' => 'admin.user.membership.update.manual.payment',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.history.update.manual.payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/user/history/update/manual/payment/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@history_update_manual_payment',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@history_update_manual_payment',
        'as' => 'admin.user.membership.history.update.manual.payment',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.email.sent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/send-email/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@send_email_to_user',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\UserMembershipController@send_email_to_user',
        'as' => 'admin.user.membership.email.sent',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/history/membership/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@user_membership_history',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@user_membership_history',
        'as' => 'admin.user.membership.history',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.history.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/history/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@pagination',
        'as' => 'admin.user.membership.history.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.membership.history.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/user/history/search-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@search_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipHistoryController@search_membership',
        'as' => 'admin.user.membership.history.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.free.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/free/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipFreeTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipFreeTemplate',
        'as' => 'admin.email.user.membership.free.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.purchase.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/purchase/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipPurchaseTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipPurchaseTemplate',
        'as' => 'admin.email.user.membership.purchase.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.renew.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/renew/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipRenewTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipRenewTemplate',
        'as' => 'admin.email.user.membership.renew.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.active.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/active/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipActiveTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipActiveTemplate',
        'as' => 'admin.email.user.membership.active.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.inactive.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/inactive/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipInactiveTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipInactiveTemplate',
        'as' => 'admin.email.user.membership.inactive.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.manual.payment.complete.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/manual-payment-complete/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipManualPaymentCompleteTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipManualPaymentCompleteTemplate',
        'as' => 'admin.email.user.membership.manual.payment.complete.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.email.user.membership.manual.payment.complete.to.admin.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/email-settings/user/membership/manual-payment-complete/to-admin/template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipManualPaymentCompleteToAdminTemplate',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\MembershipEmailTemplateController@userMembershipManualPaymentCompleteToAdminTemplate',
        'as' => 'admin.email.user.membership.manual.payment.complete.to.admin.template',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.form.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/membership/enquiry/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:enquiry-form-list',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@all_enquiry',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@all_enquiry',
        'as' => 'admin.enquiry.form.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/enquiry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.form.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/enquiry/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:enquiry-form-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@delete_enquiry',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@delete_enquiry',
        'as' => 'admin.enquiry.form.delete',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/enquiry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.form.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/enquiry/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:enquiry-form-bulk-delete',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@bulk_action_enquiry',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@bulk_action_enquiry',
        'as' => 'admin.enquiry.form.delete.bulk.action',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/enquiry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.form.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/enquiry/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@pagination',
        'as' => 'admin.enquiry.form.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/enquiry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.form.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/enquiry/search-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@search_enquiry',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Backend\\EnquiryFormController@search_enquiry',
        'as' => 'admin.enquiry.form.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => 'admin/membership/enquiry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.membership.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/membership/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@all_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@all_membership',
        'as' => 'user.membership.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.membership.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/membership/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@pagination',
        'as' => 'user.membership.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.membership.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/membership/search-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@search_history',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserMembershipController@search_history',
        'as' => 'user.membership.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.business.hours.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/membership/business-hours/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\BusinessHoursController@business_hours_add',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\BusinessHoursController@business_hours_add',
        'as' => 'user.business.hours.add',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/membership',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.enquiries.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/enquiries/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@all_enquiries',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@all_enquiries',
        'as' => 'user.enquiries.all',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/enquiries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.enquiries.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/enquiries/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@pagination',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@pagination',
        'as' => 'user.enquiries.paginate.data',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/enquiries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.enquiries.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/enquiries/search-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@search_history',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@search_history',
        'as' => 'user.enquiries.search',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/enquiries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.enquiry.form.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/enquiries/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@delete_enquiry',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\User\\UserEnquiryFormController@delete_enquiry',
        'as' => 'user.enquiry.form.delete',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/user/enquiries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'visitor.enquiry.form.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'visitor/enquiry/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\EnquiryFormController@enquiry_form_submit',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\EnquiryFormController@enquiry_form_submit',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/visitor/enquiry',
        'where' => 
        array (
        ),
        'as' => 'visitor.enquiry.form.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.user.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'membership/user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\FrontendMembershipController@user_login',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\FrontendMembershipController@user_login',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'membership.user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.membership.buy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'membership/buy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipController@buy_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipController@buy_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.membership.buy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.buy.payment.cancel.static' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/buy/cancel-static',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipController@membership_payment_cancel_static',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipController@membership_payment_cancel_static',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'membership.buy.payment.cancel.static',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'membership/renew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\frontend\\RenewMembershipController@renew_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\frontend\\RenewMembershipController@renew_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.renew.payment.cancel.static' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/renew/cancel-static',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'maintains_mode',
          3 => 'setlang',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\frontend\\RenewMembershipController@renew_membership_payment_cancel_static',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\frontend\\RenewMembershipController@renew_membership_payment_cancel_static',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'membership.renew.payment.cancel.static',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paypal.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paypal_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paypal_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paypal.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytm.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paytm_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paytm_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paytm.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paystack.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paystack_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paystack_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paystack.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.mollie.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/mollie/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@mollie_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@mollie_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.mollie.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.stripe.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/stripe/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@stripe_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@stripe_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.stripe.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.razorpay.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@razorpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@razorpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.razorpay.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.flutterwave.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/flutterwave/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@flutterwave_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@flutterwave_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.flutterwave.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.midtrans.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@midtrans_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@midtrans_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.midtrans.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payfast.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@payfast_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@payfast_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.payfast.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cashfree.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@cashfree_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@cashfree_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.cashfree.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.instamojo.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@instamojo_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@instamojo_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.instamojo.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.marcadopago.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@marcadopago_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@marcadopago_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.marcadopago.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.squareup.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-membership/squareup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@squareup_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@squareup_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.squareup.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cinetpay.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@cinetpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@cinetpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.cinetpay.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytabs.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paytabs_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@paytabs_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paytabs.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.billplz.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@billplz_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@billplz_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.billplz.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.zitopay.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@zitopay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@zitopay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.zitopay.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.toyyibpay.ipn.membership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'buy-membership/toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@toyyibpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\BuyMembershipIPNController@toyyibpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/buy-membership',
        'where' => 
        array (
        ),
        'as' => 'user.toyyibpay.ipn.membership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paypal.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paypal_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paypal_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paypal.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytm.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paytm_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paytm_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paytm.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paystack.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paystack_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paystack_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paystack.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.mollie.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/mollie/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@mollie_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@mollie_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.mollie.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.stripe.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/stripe/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@stripe_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@stripe_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.stripe.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.razorpay.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@razorpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@razorpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.razorpay.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.flutterwave.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/flutterwave/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@flutterwave_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@flutterwave_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.flutterwave.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.midtrans.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@midtrans_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@midtrans_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.midtrans.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payfast.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@payfast_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@payfast_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.payfast.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cashfree.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@cashfree_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@cashfree_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.cashfree.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.instamojo.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@instamojo_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@instamojo_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.instamojo.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.marcadopago.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@marcadopago_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@marcadopago_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.marcadopago.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.squareup.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'renew-membership/squareup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@squareup_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@squareup_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.squareup.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cinetpay.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@cinetpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@cinetpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.cinetpay.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytabs.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paytabs_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@paytabs_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.paytabs.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.billplz.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@billplz_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@billplz_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.billplz.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.zitopay.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@zitopay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@zitopay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.zitopay.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.toyyibpay.ipn.membership.renew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'renew-membership/toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@toyyibpay_ipn_for_membership',
        'controller' => 'Modules\\Membership\\app\\Http\\Controllers\\Frontend\\RenewMembershipIPNController@toyyibpay_ipn_for_membership',
        'namespace' => 'Modules\\Membership\\app\\Http\\Controllers',
        'prefix' => '/renew-membership',
        'where' => 
        array (
        ),
        'as' => 'user.toyyibpay.ipn.membership.renew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c7f0000000000000000";}}',
        'as' => 'api.newsletter',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news-letter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-list',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@index',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@index',
        'as' => 'admin.newsletter.index',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-delete',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@delete',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@delete',
        'as' => 'admin.newsletter.delete',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.single.mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-single',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail',
        'as' => 'admin.newsletter.single.mail',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news-letter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail_all_index',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail_all_index',
        'as' => 'admin.newsletter.mail',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail_all',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@send_mail_all',
        'as' => 'admin.',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.new.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-add',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@add_new_sub',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@add_new_sub',
        'as' => 'admin.newsletter.new.add',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-bulk-delete',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@bulk_action',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@bulk_action',
        'as' => 'admin.newsletter.bulk.action',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.verify.mail.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news-letter/newsletter/verify-mail-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:newsletter-newsletter-verify-mail-send',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@verify_mail_send',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Backend\\AdminNewsLetterController@verify_mail_send',
        'as' => 'admin.newsletter.verify.mail.send',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '/admin/news-letter',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'news-letter/subscribe/by/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Frontend\\NewsLetterController@subscribe',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Frontend\\NewsLetterController@subscribe',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'newsletter.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.subscriber.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news-letter/user/email/verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Frontend\\NewsLetterController@subscriber_verify',
        'controller' => 'Modules\\NewsLetter\\app\\Http\\Controllers\\Frontend\\NewsLetterController@subscriber_verify',
        'namespace' => 'Modules\\NewsLetter\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'newsletter.subscriber.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.paymentgateways' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/paymentgateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c910000000000000000";}}',
        'as' => 'api.paymentgateways',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.paypal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paypal_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paypal_settings',
        'as' => 'admin.payment.settings.paypal',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.paytm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/paytm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paytm_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paytm_settings',
        'as' => 'admin.payment.settings.paytm',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@stripe_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@stripe_settings',
        'as' => 'admin.payment.settings.stripe',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@razorpay_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@razorpay_settings',
        'as' => 'admin.payment.settings.razorpay',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.paystack' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paystack_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paystack_settings',
        'as' => 'admin.payment.settings.paystack',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.mollie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@mollie_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@mollie_settings',
        'as' => 'admin.payment.settings.mollie',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.midtrans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@midtrans_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@midtrans_settings',
        'as' => 'admin.payment.settings.midtrans',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.cashfree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cashfree_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cashfree_settings',
        'as' => 'admin.payment.settings.cashfree',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.instamojo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/instamojo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@instamojo_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@instamojo_settings',
        'as' => 'admin.payment.settings.instamojo',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.marcadopago' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/marcadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@marcadopago_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@marcadopago_settings',
        'as' => 'admin.payment.settings.marcadopago',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.zitopay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/zitopay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@zitopay_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@zitopay_settings',
        'as' => 'admin.payment.settings.zitopay',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.squareup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/squareup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@squareup_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@squareup_settings',
        'as' => 'admin.payment.settings.squareup',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.cinetpay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/cinetpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cinetpay_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cinetpay_settings',
        'as' => 'admin.payment.settings.cinetpay',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.paytabs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paytabs_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paytabs_settings',
        'as' => 'admin.payment.settings.paytabs',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.billplz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/billplz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@billplz_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@billplz_settings',
        'as' => 'admin.payment.settings.billplz',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.toyyibpay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/toyyibpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@toyyibpay_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@toyyibpay_settings',
        'as' => 'admin.payment.settings.toyyibpay',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.flutterwave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@flutterwave_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@flutterwave_settings',
        'as' => 'admin.payment.settings.flutterwave',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.payfast' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/payfast',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@payfast_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@payfast_settings',
        'as' => 'admin.payment.settings.payfast',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.manual_payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/manual-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@manual_payment_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@manual_payment_settings',
        'as' => 'admin.payment.settings.manual_payment',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-settings/payment/cash-on-delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cod_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@cod_settings',
        'as' => 'admin.payment.settings.cod',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-settings/payment/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@update_payment_settings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@update_payment_settings',
        'as' => 'admin.payment.settings.update',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-settings/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.gateway.currency.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-gateway/currency-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:payment-currency-settings',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paymentGatewaySettings',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paymentGatewaySettings',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-gateway',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.gateway.currency.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F2xiXrJWkyOefqwL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-gateway/currency-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paymentGatewaySettingsUpdate',
        'controller' => 'Modules\\PaymentGateways\\app\\Http\\Controllers\\PaymentGatewaysController@paymentGatewaySettingsUpdate',
        'namespace' => 'Modules\\PaymentGateways\\app\\Http\\Controllers',
        'prefix' => '/admin/payment-gateway',
        'where' => 
        array (
        ),
        'as' => 'generated::F2xiXrJWkyOefqwL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0fzVrO4yzGoigjtH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pluginmanage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cb10000000000000000";}}',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0fzVrO4yzGoigjtH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plugin.manage.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugin-manage/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:plugins-list',
        ),
        'uses' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@index',
        'controller' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@index',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plugin.manage.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plugin.manage.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugin-manage/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:plugins-add',
        ),
        'uses' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@add_new',
        'controller' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@add_new',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plugin.manage.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AlunGqEEe5QNUdWx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugin-manage/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@store_plugin',
        'controller' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@store_plugin',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AlunGqEEe5QNUdWx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plugin.manage.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugin-manage/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:plugins-delete',
        ),
        'uses' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@delete_plugin',
        'controller' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@delete_plugin',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plugin.manage.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plugin.manage.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugin-manage/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:plugins-status-change',
        ),
        'uses' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@change_status',
        'controller' => 'Modules\\PluginManage\\Http\\Controllers\\PluginManageController@change_status',
        'namespace' => 'Modules\\PluginManage\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plugin.manage.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.rolepermission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/rolepermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cbc0000000000000000";}}',
        'as' => 'api.rolepermission',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rolepermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.index',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@index',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@index',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rolepermission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.create',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@create',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@create',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'rolepermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.store',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@store',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@store',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rolepermission/{rolepermission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.show',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@show',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@show',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rolepermission/{rolepermission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.edit',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@edit',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@edit',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'rolepermission/{rolepermission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.update',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@update',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@update',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolepermission.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'rolepermission/{rolepermission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'rolepermission.destroy',
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@destroy',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@destroy',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage/all-admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@all_admins',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@all_admins',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/manage/create/new-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@create_admin',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@create_admin',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/manage/edit/admin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@edit_admin',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@edit_admin',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage/delete/admin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@delete_admin',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@delete_admin',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage/change/admin/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@change_password',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\AdminManageController@change_password',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/manage/permission/role/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@all_role',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@all_role',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.role.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage/permission/role/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@edit_role',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@edit_role',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.role.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage/permission/role/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@permission',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@permission',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.role.permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage/permission/role/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@create_permission',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@create_permission',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.role.permission.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage/permission/role/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@delete_role',
        'controller' => 'Modules\\RolePermission\\app\\Http\\Controllers\\RolePermissionController@delete_role',
        'namespace' => 'Modules\\RolePermission\\app\\Http\\Controllers',
        'prefix' => '/admin/manage',
        'where' => 
        array (
        ),
        'as' => 'admin.role.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.supportticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/supportticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cd20000000000000000";}}',
        'as' => 'api.supportticket',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supportticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.index',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@index',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@index',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supportticket/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.create',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@create',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@create',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'supportticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.store',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@store',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@store',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supportticket/{supportticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.show',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@show',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@show',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supportticket/{supportticket}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.edit',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@edit',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@edit',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'supportticket/{supportticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.update',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@update',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@update',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supportticket.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'supportticket/{supportticket}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'supportticket.destroy',
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@destroy',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@destroy',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:department-list',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@department',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@department',
        'as' => 'admin.department',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.department.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/edit-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:department-edit',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@edit_department',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@edit_department',
        'as' => 'admin.department.edit',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.department.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/department-change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:department-status-change',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@change_status',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@change_status',
        'as' => 'admin.department.status',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.department.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/delete-department/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:department-delete',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@delete_department',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@delete_department',
        'as' => 'admin.department.delete',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.department.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/department-bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:department-bulk-delete',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@bulk_action',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\DepartmentController@bulk_action',
        'as' => 'admin.department.delete.bulk.action',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:support-ticket-list',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@ticket',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@ticket',
        'as' => 'admin.ticket',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/pagination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@paginate',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@paginate',
        'as' => 'admin.ticket.paginate.data',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@search_ticket',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@search_ticket',
        'as' => 'admin.ticket.search',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:support-ticket-status-change',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@change_status',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@change_status',
        'as' => 'admin.ticket.status',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/delete-ticket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:support-ticket-delete',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@delete_ticket',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@delete_ticket',
        'as' => 'admin.ticket.delete',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.delete.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support-ticket/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:support-ticket-bulk-delete',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@bulk_action',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@bulk_action',
        'as' => 'admin.ticket.delete.bulk.action',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ticket.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'permission:support-ticket-details',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@ticket_details',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketController@ticket_details',
        'as' => 'admin.ticket.details',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/admin/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.support.ticket.to.admin.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/email-settings/user/support-ticket/to-admin-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketEmailTemplateController@supportTicketToAdminTemplate',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketEmailTemplateController@supportTicketToAdminTemplate',
        'as' => 'admin.user.support.ticket.to.admin.template',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => 'admin/support-ticket/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.support.ticket.to.user.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/support-ticket/email-settings/user/support-ticket/to-user-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketEmailTemplateController@supportTicketToUserTemplate',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\Backend\\SupportTicketEmailTemplateController@supportTicketToUserTemplate',
        'as' => 'admin.user.support.ticket.to.user.template',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => 'admin/support-ticket/email-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/support-ticket/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@ticket',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@ticket',
        'as' => 'user.ticket',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/user/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support-ticket/pagination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@paginate',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@paginate',
        'as' => 'user.ticket.paginate.data',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/user/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support-ticket/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@search_ticket',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@search_ticket',
        'as' => 'user.ticket.search',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/user/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ticket.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/support-ticket/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'userEmailVerify',
          3 => 'globalVariable',
          4 => 'maintains_mode',
          5 => 'setlang',
        ),
        'uses' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@ticket_details',
        'controller' => 'Modules\\SupportTicket\\app\\Http\\Controllers\\UserSupportTicketController@ticket_details',
        'as' => 'user.ticket.details',
        'namespace' => 'Modules\\SupportTicket\\app\\Http\\Controllers',
        'prefix' => '/user/support-ticket',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"fn (\\Illuminate\\Http\\Request $request) => $request->user()";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cd30000000000000000";}}',
        'as' => 'api.wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.deposit.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/wallet/wallet/deposit-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
          4 => 'permission:deposit-settings',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@deposit_settings',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@deposit_settings',
        'as' => 'admin.wallet.deposit.settings',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
          4 => 'permission:deposit-list',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_lists',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_lists',
        'as' => 'admin.wallet.lists',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet/status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
          4 => 'permission:complete-manual-deposit-status',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@change_status',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@change_status',
        'as' => 'admin.wallet.status',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/history/records',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
          4 => 'permission:deposit-history-details',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_history',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_history',
        'as' => 'admin.wallet.history',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.history.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet/history/records/status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_history_status',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@wallet_history_status',
        'as' => 'admin.wallet.history.status',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.deposit.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet/deposit/create-by-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@depositCreateByAdmin',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@depositCreateByAdmin',
        'as' => 'admin.wallet.deposit.create',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@pagination',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@pagination',
        'as' => 'admin.wallet.paginate.data',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/search-wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@search_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@search_wallet',
        'as' => 'admin.wallet.search',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.history.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/history/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@pagination_history',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@pagination_history',
        'as' => 'admin.wallet.history.paginate.data',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.wallet.history.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet/history/search-wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@search_wallet_history',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Backend\\WalletController@search_wallet_history',
        'as' => 'admin.wallet.history.search',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/admin/wallet',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wallet-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@wallet_history',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@wallet_history',
        'as' => 'user.wallet.history',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.deposit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wallet/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit',
        'as' => 'user.wallet.deposit',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.deposit.payment.cancel.static' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wallet/deposit-cancel-static',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit_payment_cancel_static',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit_payment_cancel_static',
        'as' => 'user.wallet.deposit.payment.cancel.static',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.paginate.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/paginate/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@pagination',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@pagination',
        'as' => 'user.wallet.paginate.data',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/search-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@search_history',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@search_history',
        'as' => 'user.wallet.search',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wallet.deposit.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wallet/deposit-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setlang',
          3 => 'globalVariable',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit_payment_success',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletController@deposit_payment_success',
        'as' => 'user.wallet.deposit.payment.success',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paypal.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paypal_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paypal_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.paypal.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytm.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paytm_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paytm_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.paytm.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paystack.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paystack_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paystack_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.paystack.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.mollie.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/mollie/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@mollie_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@mollie_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.mollie.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.stripe.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/stripe/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@stripe_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@stripe_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.stripe.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.razorpay.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@razorpay_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@razorpay_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.razorpay.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.flutterwave.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/flutterwave/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@flutterwave_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@flutterwave_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.flutterwave.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.midtrans.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@midtrans_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@midtrans_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.midtrans.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payfast.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@payfast_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@payfast_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.payfast.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cashfree.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@cashfree_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@cashfree_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.cashfree.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.instamojo.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@instamojo_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@instamojo_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.instamojo.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.marcadopago.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@mercadopago_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@mercadopago_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.marcadopago.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.squareup.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/squareup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@squareup_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@squareup_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.squareup.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.cinetpay.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@cinetpay_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@cinetpay_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.cinetpay.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.paytabs.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paytabs_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@paytabs_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.paytabs.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.billplz.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@billplz_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@billplz_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.billplz.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.zitopay.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@zitopay_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@zitopay_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.zitopay.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kineticpay.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/kineticpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@kineticpay_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@kineticpay_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.kineticpay.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.toyyibpay.ipn.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wallet/toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@toyyibpay_ipn_for_wallet',
        'controller' => 'Modules\\Wallet\\app\\Http\\Controllers\\Frontend\\UserWalletPaymentController@toyyibpay_ipn_for_wallet',
        'namespace' => 'Modules\\Wallet\\app\\Http\\Controllers',
        'prefix' => '/wallet',
        'where' => 
        array (
        ),
        'as' => 'user.toyyibpay.ipn.wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DzHqJDoamFWgPPUD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'print-request',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:151:"function (\\Illuminate\\Http\\Request $request) {
    \\info(\'print-request\');
    \\info($request->all());
    return \\response()->json($request->all());
}";s:5:"scope";s:18:"App\\Console\\Kernel";s:4:"this";N;s:4:"self";s:32:"0000000000000db00000000000000000";}}',
        'as' => 'generated::DzHqJDoamFWgPPUD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
