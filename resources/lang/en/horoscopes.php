<?php

return [

    // Titles
    'showing-all-horoscopes'     => 'Showing All Horoscopes',
    'users-menu-alt'        => 'Show Horoscopes Management Menu',
    'create-new-user'       => 'Create New Horoscope',
    'show-deleted-horoscopes'    => 'Show Deleted Horoscopes',
    'editing-horoscopes'          => 'Editing Horoscope :name',
    'showing-horoscopes'          => 'Showing Horoscope :name',
    'showing-horoscopes-title'    => ':name Report',

    // Flash Messages
    'createSuccess'   => 'Successfully created user! ',
    'updateSuccess'   => 'Successfully updated user! ',
    'deleteSuccess'   => 'Successfully deleted user! ',
    'deleteSelfError' => 'You cannot delete yourself! ',

    // Show User Tab
    'viewProfile'            => 'View horoscope',
    'edithoroscope'               => 'Edit Horoscope',
    'deletehoroscope'             => 'Delete Horoscope',
    'horoscopeBackBtn'           => 'Back to Horoscope',
    'horoscopePanelTitle'        => 'User Information',
    'labelUserName'          => 'Username:',
    'labelEmail'             => 'Email:',
    'labelFirstName'         => 'First Name:',
    'labelLastName'          => 'Last Name:',
    'labelRole'              => 'Role:',
    'labelStatus'            => 'Status:',
    'labelAccessLevel'       => 'Access',
    'labelPermissions'       => 'Permissions:',
    'labelCreatedAt'         => 'Created At:',
    'labelUpdatedAt'         => 'Updated At:',
    'labelIpEmail'           => 'Email Signup IP:',
    'labelIpEmail'           => 'Email Signup IP:',
    'labelIpConfirm'         => 'Confirmation IP:',
    'labelIpSocial'          => 'Socialite Signup IP:',
    'labelIpAdmin'           => 'Admin Signup IP:',
    'labelIpUpdate'          => 'Last Update IP:',
    'labelDeletedAt'         => 'Deleted on',
    'labelIpDeleted'         => 'Deleted IP:',
    'usersDeletedPanelTitle' => 'Deleted User Information',
    'usersBackDelBtn'        => 'Back to Deleted Users',

    'successRestore'    => 'User successfully restored.',
    'successDestroy'    => 'User record successfully destroyed.',
    'errorUserNotFound' => 'User not found.',

    'labelUserLevel'  => 'Level',
    'labelUserLevels' => 'Levels',

    'users-table' => [
        'caption'   => '{1} :horoscopes Horoscopes total|[2,*] :horoscopes Horoscopes',
        'id'        => 'Order ID',
        'name'      => 'Username',
        'fname'     => 'Name',
        'rtype'     => 'Report Type',
        'lname'     => 'Last Name',
        'phone'     => 'Phone Number',
        'email'     => 'Email',
        'gender'     => 'Gender',
        'pob'      => 'Place Of Birth',
        'cob'      => 'Country Of Birth',
        'dob'      => 'Date Of Birth',
        'tob'      => 'Time Of Birth',
        'reftype'   => 'Refferal Type',
        'refcomments' =>    'Refferal Description',
        'horoscope' =>    'Prepared Report',
        'status' =>    'Report Status',
        'productamount' =>    'Report Price',
        'created'   => 'Created',
        'updated'   => 'Updated',
        'actions'   => 'Actions',
        'updated'   => 'Updated',
    ],

    'buttons' => [
        'create-new'    => 'New User',
        'delete'        => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"> Horoscope</span>',
        'show'          => '<i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"> Order </span>',
        'edit'          => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span><span class="hidden-xs hidden-sm hidden-md"> Horoscope</span>',
        'back-to-horoscopes' => '<span class="hidden-sm hidden-xs">Back to </span><span class="hidden-xs">Horoscope</span>',
        'back-to-horoscope'  => 'Back  <span class="hidden-xs">to User</span>',
        'delete-horoscope'   => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"> Horoscope</span>',
        'edit-horoscope'     => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Edit</span><span class="hidden-xs"> Horoscope</span>',
    ],

    'tooltips' => [
        'delete'        => 'Delete',
        'show'          => 'Show',
        'edit'          => 'Edit',
        'create-new'    => 'Create New User',
        'back-users'    => 'Back to users',
        'email-user'    => 'Email :user',
        'submit-search' => 'Submit Users Search',
        'clear-search'  => 'Clear Search Results',
    ],

    'messages' => [
        'userNameRequired'       => 'Username is required',
        'fNameRequired'          => 'First Name is required',
        'emailRequired'          => 'Email is required',
        'emailInvalid'           => 'Email is invalid',
        'user-creation-success'  => 'Successfully created user!',
        'update-user-success'    => 'Successfully updated user!',
        'delete-success'         => 'Successfully deleted the user!',
    ],

    'show-horoscope' => [
        'id'                => 'Order ID',
        'name'              => 'name',
        'email'             => '<span class="hidden-xs">User </span>Email',
        'created'           => 'Created <span class="hidden-xs">at</span>',
        'updated'           => 'Updated <span class="hidden-xs">at</span>',
    ],

    'search'  => [
        'title'             => 'Showing Search Results',
        'found-footer'      => ' Record(s) found',
        'no-results'        => 'No Results',
        'search-users-ph'   => 'Search Horoscopes',
    ],

    'modals' => [
        'delete_user_message' => 'Are you sure you want to delete :user?',
    ],
];
