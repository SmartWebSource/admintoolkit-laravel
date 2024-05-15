<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admintoolkit::pages.index');
})->name('dashboard.analytics');

Route::get('ecommerce', function () {
    return view('admintoolkit::pages.ecommerce');
})->name('dashboard.ecommerce');


Route::get('email', function () {
    return view('admintoolkit::pages.email');
});

Route::get('chat', function () {
    return view('admintoolkit::pages.chat');
});

Route::get('calendar', function () {
    return view('admintoolkit::pages.calendar');
});

//invoice
Route::get('invoice-create', function () {
    return view('admintoolkit::pages.invoice_create');
})->name('invoice.create');

Route::get('invoice-details', function () {
    return view('admintoolkit::pages.invoice_details');
})->name('invoice.details');

//ecommerce
Route::get('product-list', function () {
    return view('admintoolkit::pages.product_list');
})->name('ecommerce.product.list');

Route::get('product-edit', function () {
    return view('admintoolkit::pages.product_edit');
})->name('ecommerce.product.edit');

Route::get('order-list', function () {
    return view('admintoolkit::pages.order_list');
})->name('ecommerce.order.list');

Route::get('order-details', function () {
    return view('admintoolkit::pages.order_details');
})->name('ecommerce.order.details');

Route::get('customer-list', function () {
    return view('admintoolkit::pages.customer_list');
})->name('ecommerce.customer.list');

//users
Route::get('user-list', function () {
    return view('admintoolkit::pages.user_list');
})->name('users.list');


Route::get('user-profile', function () {
    return view('admintoolkit::pages.user_profile');
})->name('users.profile');

//common
Route::get('accordion', function () {
    return view('admintoolkit::pages.accordion');
});

Route::get('accordion', function () {
    return view('admintoolkit::pages.accordion');
});


Route::get('accordion', function () {
    return view('admintoolkit::pages.accordion');
})->name('components.accordion');

Route::get('alert', function () {
    return view('admintoolkit::pages.alert');
})->name('components.alert');

Route::get('avater', function () {
    return view('admintoolkit::pages.avater');
});

Route::get('badge', function () {
    return view('admintoolkit::pages.badge');
})->name('components.badge');

Route::get('button', function () {
    return view('admintoolkit::pages.button');
})->name('components.button');

Route::get('card', function () {
    return view('admintoolkit::pages.card');
})->name('components.card');

Route::get('carousel', function () {
    return view('admintoolkit::pages.carousel');
})->name('components.carousel');


Route::get('drawer', function () {
    return view('admintoolkit::pages.drawer');
})->name('components.drawer');

Route::get('dropdown', function () {
    return view('admintoolkit::pages.dropdown');
})->name('components.dropdown');

Route::get('list-group', function () {
    return view('admintoolkit::pages.list_group');
})->name('components.list-group');

Route::get('modal', function () {
    return view('admintoolkit::pages.modal');
})->name('components.modal');

Route::get('pagination', function () {
    return view('admintoolkit::pages.pagination');
})->name('components.pagination');

Route::get('progress', function () {
    return view('admintoolkit::pages.progress');
})->name('components.progress');

Route::get('skeleton', function () {
    return view('admintoolkit::pages.skeleton');
})->name('components.skeleton');

Route::get('spinner', function () {
    return view('admintoolkit::pages.spinner');
})->name('components.spinner');

Route::get('tab', function () {
    return view('admintoolkit::pages.tab');
})->name('components.tab');

Route::get('toast', function () {
    return view('admintoolkit::pages.toast');
})->name('components.toast');


Route::get('tooltip', function () {
    return view('admintoolkit::pages.tooltip');
})->name('components.tooltip');

//form
Route::get('input', function () {
    return view('admintoolkit::pages.input');
})->name('form.input');

Route::get('input-group', function () {
    return view('admintoolkit::pages.input_group');
})->name('form.input_group');

Route::get('textarea', function () {
    return view('admintoolkit::pages.textarea');
})->name('form.textarea');

Route::get('checkbox', function () {
    return view('admintoolkit::pages.checkbox');
})->name('form.checkbox');

Route::get('radio', function () {
    return view('admintoolkit::pages.radio');
})->name('form.radio');

Route::get('toggle', function () {
    return view('admintoolkit::pages.toggle');
})->name('form.toggle');

Route::get('select', function () {
    return view('admintoolkit::pages.select');
})->name('form.select');

Route::get('datepicker', function () {
    return view('admintoolkit::pages.datepicker');
})->name('form.datepicker');

Route::get('editor', function () {
    return view('admintoolkit::pages.editor');
})->name('form.editor');

Route::get('uploader', function () {
    return view('admintoolkit::pages.uploader');
})->name('form.uploader');

Route::get('layout', function () {
    return view('admintoolkit::pages.form_layout');
})->name('form.layout');

Route::get('validation', function () {
    return view('admintoolkit::pages.validation');
})->name('form.validation');

//table
Route::get('basic-table', function () {
    return view('admintoolkit::pages.basic_table');
})->name('table.basic');

Route::get('data-table', function () {
    return view('admintoolkit::pages.data_table');
})->name('table.datatable');

//charts
Route::get('charts', function () {
    return view('admintoolkit::pages.charts');
});

Route::get('icons', function () {
    return view('admintoolkit::pages.icons');
});

Route::get('typography', function () {
    return view('admintoolkit::pages.typography');
});

//authenticate
Route::get('login', function () {
    return view('admintoolkit::pages.login');
})->name('auth.login');

Route::get('register', function () {
    return view('admintoolkit::pages.register');
})->name('auth.register');


Route::get('forget-password', function () {
    return view('admintoolkit::pages.forger_password');
})->name('auth.forget.password');

Route::get('reset-password', function () {
    return view('admintoolkit::pages.reset_password');
})->name('auth.reset.password');

?>
