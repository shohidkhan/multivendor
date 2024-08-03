@extends("admin.layouts.app")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><span>Admins List</span> </h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #SL
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Mobile
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Status
                        </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $admin)
                      <tr>
                        <td>
                          {{ $admin["id"] }}
                        </td>
                        <td>
                          {{ $admin["name"] }}
                        </td>
                        <td>
                          {{ $admin["email"] }}
                        </td>
                        <td>
                       {{ $admin["mobile"]}}
                        </td>
                        <td>
                         @if($admin["image"])
                         <img src="{{asset($admin["image"])}}" style="width: 50px;height: 50px; border-radius: 50%;" alt="image">
                         @else
                         No Image
                         @endif
                        </td>
                        <td>
                          {{ $admin["type"] }}
                        </td>
                        <td>
                            @if ($admin["status"] == 1)
                                <a href="javascript:void(0)" class="updateadminStatus" id="admin-{{ $admin["id"] }}" admin-id="{{ $admin["id"] }}">
                                    <i style="font-size: 30px;" class="mdi mdi-bookmark-check" status="Active"></i>
                                </a>
                            @else
                                <a href="javascript:void(0)" class="updateadminStatus" id="admin-{{ $admin["id"] }}" admin-id="{{ $admin["id"] }}">
                                    <i style="font-size: 30px; " class="mdi mdi-bookmark-outline" status="Inactive"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.admins.details',$admin["id"]) }}">
                                <i style="font-size: 20px; " class="mdi mdi-eye"></i>
                            </a>
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td class="text-center" colspan="9">No data found</td>
                      </tr>
                      @endforelse
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection