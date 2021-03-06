@extends('frontend.layouts.centered')

@section('head.title', config('app.name') . " &laquo; " . trans('general.action.do_password_reset'))

@section('page.content')
    @include('frontend.auth.partials.form-panel', [
        'formPartial' => 'frontend.auth.partials.forms.reset-password',
        'footerLinks' => [
            [ 'url' => route('frontend.auth.login.form'), 'label' => trans('general.action.login') ],
            [ 'url' => route('frontend.auth.register.form'), 'label' => trans('general.action.register') ],
        ],
    ])
@endsection