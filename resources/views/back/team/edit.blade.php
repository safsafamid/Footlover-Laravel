@extends('back.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ __('breadcrumbs.team') }} /</span>
            {{ __('breadcrumbs.add_team') }}</h4>
        @if (Session::has('success'))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('admin.team.update', $team->slug) }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">{{ __('spans.name') }}</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ $team->name }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="shortCode" class="form-label">{{ __('spans.short_code') }}</label>
                                    <input class="form-control" type="text" name="shortCode" id="shortCode"
                                        value="{{ $team->name }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="displayName" class="form-label">{{ __('spans.display_name') }}</label>
                                    <input class="form-control" type="text" id="displayName" name="displayName"
                                        value="{{ $team->display_name }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="manager" class="form-label">{{ __('spans.manager') }}</label>
                                    <input class="form-control" type="text" id="manager" name="manager"
                                        value="{{ $team->manager }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="founded" class="form-label">{{ __('spans.founded') }}</label>
                                    <input type="text" class="form-control" id="founded" name="founded"
                                        value="{{ $team->founded }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="logo" class="form-label">{{ __('spans.logo') }}</label>
                                    <input type="text" class="form-control" id="logo" name="logo"
                                        value="{{ $team->logo_path }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="stadium_id">{{ __('spans.stadium') }}</label>
                                    <select id="stadium_id" name="stadium_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($stadiums as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($team->stadium_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="league_id" class="form-label">{{ __('spans.league') }}</label>
                                    <select id="league_id" name="league_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($leagues as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($team->league_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="country_id" class="form-label">{{ __('spans.country') }}</label>
                                    <select id="country_id" name="country_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($countrys as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($team->country_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="position_id" class="form-label">{{ __('spans.position') }}</label>
                                    <select id="position_id" name="position_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($positions as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">{{ __('btns.save_changes') }}</button>
                                <a href="{{route('admin.teams.index')}}" class="btn btn-outline-secondary">{{ __('btns.cancel') }}</a>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
@endsection
