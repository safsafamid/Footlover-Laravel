@extends('back.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a
                    href="{{ route('admin.players.index') }}">{{ __('breadcrumbs.player') }}</a> /</span> Account</h4>
        @if (Session::has('success'))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST"
                            action="{{ route('admin.player.update', $player->slug) }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="firstName" class="form-label">{{ __('spans.first_name') }}</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="{{ $player->firstname }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="lastName" class="form-label">{{ __('spans.last_name') }}</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName"
                                        value="{{ $player->lastname }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="fullName" class="form-label">{{ __('spans.full_name') }}</label>
                                    <input class="form-control" type="text" name="fullName" id="fullName"
                                        value="{{ $player->fullname }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="displayName" class="form-label">{{ __('spans.display_name') }}</label>
                                    <input class="form-control" type="text" id="displayName" name="displayName"
                                        value="{{ $player->display_name }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="shirtNumber" class="form-label">{{ __('spans.shirt_number') }}</label>
                                    <input type="text" class="form-control" id="shirtNumber" name="shirtNumber"
                                        value="{{ $player->shirt_number }}" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="nationality">{{ __('spans.nationality') }}</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="nationality" name="nationality" class="form-control"
                                            value="{{ $player->nationality }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="birthdate" class="form-label">{{ __('spans.birthdate') }}</label>
                                    <input type="text" class="form-control" id="birthdate" name="birthdate"
                                        value="{{ $player->birthdate }}" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="birthcountry" class="form-label">{{ __('spans.birthcountry') }}</label>
                                    <input class="form-control" type="text" id="birthcountry" name="birthcountry"
                                        value="{{ $player->birthcountry }}" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="birthplace" class="form-label">{{ __('spans.birthplace') }}</label>
                                    <input type="text" class="form-control" id="birthplace" name="birthplace"
                                        value="{{ $player->birthplace }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="team_id">{{ __('spans.team') }}</label>
                                    <select id="team_id" name="team_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($teams as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($player->team_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="league_id" class="form-label">{{ __('spans.league') }}</label>
                                    <select id="league_id" name="league_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($leagues as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($player->league_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="country_id" class="form-label">{{ __('spans.country') }}</label>
                                    <select id="country_id" name="country_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($countrys as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($player->country_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="position_id" class="form-label">{{ __('spans.position') }}</label>
                                    <select id="position_id" name="position_id" class="select2 form-select">
                                        <option value="">{{ __('spans.select') }}</option>
                                        @foreach ($positions as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($player->position_id == $item->id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="height" class="form-label">{{ __('spans.height') }}</label>
                                    <input class="form-control" type="text" id="height" name="height"
                                        value="{{ $player->height }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="weight" class="form-label">{{ __('spans.weight') }}</label>
                                    <input class="form-control" type="text" name="weight" id="weight"
                                        value="{{ $player->weight }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="image" class="form-label">{{ __('spans.image') }}</label>
                                    <input class="form-control" type="text" name="image" id="image"
                                        value="{{ $player->image_path }}" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit"
                                    class="btn btn-primary me-2">{{ __('btns.save_changes') }}</button>
                                    <a href="{{route('admin.players.index')}}" class="btn btn-outline-secondary">{{ __('btns.cancel') }}</a>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
@endsection
