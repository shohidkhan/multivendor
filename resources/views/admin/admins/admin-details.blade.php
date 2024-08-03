@extends("admin.layouts.app")
@section("content")
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div style="height: 72px;" class="items-center bg-white border-0 rounded card-header d-flex justify-content-between">
                <h4 class="m-0 mt-3 card-title"> 
                    @if($admin_details["type"] == "superadmin") 
                    Superadmin 
                    @elseif($admin_details["type"] == "subadmin") 
                    Subadmin
                    @elseif($admin_details["type"] == "admin") 
                    Admin
                    @endif 
                    Details
                </h4>
                <a href="{{ route('admin.admins.page') }}" class="btn btn-primary"><i class="ti-back-left"></i></a>
              </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                    @if($admin_details["type"] == "superadmin") 
                    Superadmin 
                    @elseif($admin_details["type"] == "subadmin") 
                    Subadmin
                    @elseif($admin_details["type"] == "admin") 
                    Admin
                    @endif 
                    
                     Personal Details
                    </h4>
                <div class="pt-3 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                            @if($admin_details["type"] == "superadmin") 
                            Superadmin 
                            @elseif($admin_details["type"] == "subadmin") 
                            Subadmin
                            @elseif($admin_details["type"] == "admin") 
                            Admin
                            @endif 
                           Name
                        </th>
                        <td>
                            @if($admin_details["name"] != null)
                            {{ $admin_details["name"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>
                            @if($admin_details["type"] == "superadmin") 
                            Superadmin 
                            @elseif($admin_details["type"] == "subadmin") 
                            Subadmin
                            @elseif($admin_details["type"] == "admin") 
                            Admin
                            @endif 
                          Email
                        </th>
                        <td>
                            @if($admin_details["email"] != null)
                            {{ $admin_details["email"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                      <tr>
                        <th>
                            @if($admin_details["type"] == "superadmin") 
                            Superadmin 
                            @elseif($admin_details["type"] == "subadmin") 
                            Subadmin
                            @elseif($admin_details["type"] == "admin") 
                            Admin
                            @endif 
                             Mobile 
                        </th>
                        <td>
                            @if($admin_details["mobile"] != null)
                            {{ $admin_details["mobile"] }}
                            @else
                            <span>N/A</span>
                            @endif
                        </td>
                      </tr>
                     
                      <tr>
                        <th> Status</th>
                        <td>
                            @if($admin_details["status"]==0)
                                <span class="badge badge-danger">Inactive</span>
                            @else
                                <span class="badge badge-success">Active</span>
                            @endif
                        </td>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection