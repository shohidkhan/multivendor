@extends("admin.layouts.app")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><span>Vendors List</span> </h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered" id="my-vendors">
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
                        @forelse ($vendors as $vendor)
                      <tr  >
                        <td>
                          {{ $vendor["id"] }}
                        </td>
                        <td>
                          {{ $vendor["name"] }}
                        </td>
                        <td>
                          {{ $vendor["email"] }}
                        </td>
                        <td>
                       {{ $vendor["mobile"]}}
                        </td>
                        <td>
                         @if($vendor["image"])
                         <img src="{{asset($vendor["image"])}}" style="width: 50px;height: 50px; border-radius: 50%;" alt="image">
                         @else
                         No Image
                         @endif
                        </td>
                        <td>
                          {{ $vendor["type"] }}
                        </td>
                        <td>
                            @if ($vendor["status"] == 1)
                                <a href="javascript:void(0)" class="updateVendorStatus" id="admin-{{ $vendor["id"] }}" admin-id="{{ $vendor["id"] }}">
                                    <i style="font-size: 30px;" class="mdi mdi-bookmark-check" status="Active"></i>
                                </a>
                            @else
                                <a href="javascript:void(0)" class="updateVendorStatus" id="admin-{{ $vendor["id"] }}" admin-id="{{ $vendor["id"] }}">
                                    <i style="font-size: 30px; " class="mdi mdi-bookmark-outline" status="Inactive"></i>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.vendor.details', $vendor["id"]) }}">
                                <i style="font-size: 20px; " class="mdi mdi-eye"></i>
                            </a>
                        </td>
                      </tr>
                      @empty
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