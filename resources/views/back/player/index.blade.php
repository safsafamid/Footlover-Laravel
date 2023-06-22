@extends('back.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('header.players') }}</h4>

        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.player.create')}}"><i class='bx bx-message-square-add'></i> {{ __('btns.add') }}</a>
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
            <h5 class="card-header">{{ __('header.players_list') }}</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('tables.full_name') }}</th>
                            <th>{{ __('tables.display_name') }}</th>
                            <th>{{ __('tables.shirt_number') }}</th>
                            <th>{{ __('tables.team') }}</th>
                            <th>{{ __('tables.image') }}</th>
                            <th>{{ __('tables.status')}}</th>
                            <th>{{ __('tables.actions')}}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($players as $item)
                            <tr class="table-default">
                                <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>{{$item->fullname}}</strong></td>
                                <td>{{$item->display_name}}</td>
                                <td>{{$item->shirt_number}}</td>
                                <td>{{$item->team->name}}</td>
                                <td>
                                    <img src="{{$item->image_path}}" alt="user-avatar" class="d-block rounded" height="50" width="50" id="uploadedAvatar">
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.player.edit',['slug'=>$item->slug])}}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{route('admin.player.details',['slug'=>$item->slug])}}"><i
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
