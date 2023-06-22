@extends('back.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('header.teams') }}</h4>

        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.team.create')}}"><i class='bx bx-message-square-add'></i> {{ __('btns.add') }}</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="pages-account-settings-notifications.html"
                ><i class="bx bx-bell me-1"></i> Notifications</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages-account-settings-connections.html"
                ><i class="bx bx-link-alt me-1"></i> Connections</a
              >
            </li> --}}
          </ul>
        <div class="card">
            <h5 class="card-header">{{ __('header.teams_list') }}</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('tables.name') }}</th>
                            <th>{{ __('tables.display_name') }}</th>
                            <th>{{ __('tables.short_code') }}</th>
                            <th>{{ __('tables.league') }}</th>
                            <th>{{ __('tables.manager') }}</th>
                            <th>{{ __('tables.founded') }}</th>
                            <th>{{ __('tables.logo') }}</th>
                            <th>{{ __('tables.status')}}</th>
                            <th>{{ __('tables.actions')}}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($teams as $item)
                            <tr class="table-default">
                                <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>{{$item->name}}</strong></td>
                                <td>{{$item->display_name}}</td>
                                <td>{{$item->short_code}}</td>
                                <td>{{$item->league->name}}</td>
                                <td>{{$item->manager}}</td>
                                <td>{{$item->founded}}</td>
                                <td>
                                    <img src="{{$item->logo_path}}" alt="user-avatar" class="d-block rounded" height="50" width="50" id="uploadedAvatar">
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.team.edit',['slug'=>$item->slug])}}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{route('admin.team.details',['slug'=>$item->slug])}}"><i
                                                        class="bx bx-edit-alt me-1"></i> Details</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Contextual Classes -->
    </div>
@endsection
