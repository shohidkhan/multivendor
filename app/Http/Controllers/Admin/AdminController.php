<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\UpdateDetailsRequest;
use App\Models\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {
    //

    public function dashboard() {
        Session::put("page", "dashboard");
        return view('admin.dashboard');
    }

    public function loginPage() {

        return view('admin.auth.login');
    }
    public function login(Request $request) {
        try {
            $request->validate([
                "email" => "required|email",
                "password" => "required",
            ]);
            $email = $request->input("email");
            $password = $request->input("password");

            $admin = Admin::where("email", $email)->first();

            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route("admin.dashboard");
            } else {
                return redirect()->back()->with("error", "Invalid email or password");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    //password change page
    public function passwordChangePage() {
        Session::put("page", "password-change");
        $admin = Auth::guard('admin')->user();
        $adminDetails = Admin::where("email", $admin->email)->first();
        return view("admin.settings.password-change", compact('adminDetails'));
    }

    public function passwordUpdate(PasswordChangeRequest $request) {
        // dd($request->all());

        if (Hash::check($request->input("old_password"), Auth::guard('admin')->user()->password)) {
            //new password and confirm password should be same
            if ($request->input("password") == $request->input("confirm_password")) {
                $admin = Auth::guard('admin')->user();
                Admin::where("email", $admin->email)->update([
                    "password" => Hash::make($request->input("password")),
                ]);
                return redirect()->back()->with("success", "Password update successfully");
            } else {
                return redirect()->back()->with("password_error", "Confirm password does not matched");
            }

        } else {
            return redirect()->back()->with("password_error", "Old password not matched");
        }

    }

    public function checkAdminPassword(Request $request) {
        $data = $request->all();

        if (Hash::check($data["old_password"], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }

    function updateDetailsPage() {
        Session::put("page", "update-details-page");
        $admin = Auth::guard('admin')->user();
        $adminDetails = Admin::where("email", $admin->email)->first();
        return view("admin.settings.update-details-page", compact("adminDetails"));
    }

    function updateDetails(UpdateDetailsRequest $request) {
        $admin = Auth::guard('admin')->user();
        $adminDetails = Admin::where("email", $admin->email)->first();

        if ($adminDetails->image) {
            // dd();
            if ($request->hasFile("image")) {

                //image processing
                $imageRemove = unlink(public_path($adminDetails->image));
                $image = $request->file("image");
                $imageName = time() . "_" . $image->getClientOriginalName();

                //image path
                $path = "/assets/backend/uploads/admin/{$imageName}";
                $imageUpload = $image->move(public_path('/assets/backend/uploads/admin/'), $imageName);

                Admin::where("id", $adminDetails->id)->update([
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "mobile" => $request->input("mobile"),
                    "image" => $path,
                ]);
                return redirect()->back()->with("success", "Details update successfully");
            } else {
                Admin::where("id", $adminDetails->id)->update([
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "mobile" => $request->input("mobile"),
                    "image" => $adminDetails->image ? $adminDetails->image : "",
                ]);
                return redirect()->back()->with("success", "Details update successfully");
            }
        } else {

            if ($request->hasFile("image")) {
                // dd($request->all());
                $image = $request->file("image");
                $imageName = time() . "_" . $image->getClientOriginalName();

                //image path
                $path = "/assets/backend/uploads/admin/{$imageName}";
                $imageUpload = $image->move(public_path('/assets/backend/uploads/admin/'), $imageName);

                Admin::where("id", $adminDetails->id)->update([
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "mobile" => $request->input("mobile"),
                    "image" => $path,
                ]);
                return redirect()->back()->with("success", "Details update successfully");
            } else {
                Admin::where("id", $adminDetails->id)->update([
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "mobile" => $request->input("mobile"),
                    "image" => $adminDetails->image ? $adminDetails->image : "",
                ]);
                return redirect()->back()->with("success", "Details update successfully");
            }

        }

    }

    //Vendors management
    public function vendors() {
        Session::put("page", "vendors");
        $vendors = Admin::where("type", "vendor")->get();
        return view("admin.admins.vendors", compact("vendors"));
    }
    //Vendor details
    public function vendorDetails(Request $request) {
        $vendorUser = Admin::where("id", $request->id)->first();
        $vendorDetails = Vendor::with("VendorBusinessDetail", "Vendor", "VendorBankDetail")->where("id", $vendorUser->vendor_id)->first();

        return view("admin.admins.vendor-details", compact("vendorDetails"));
    }

    public function updateVendorStatus(Request $request) {

        // if (Admin::where("vendor_id", $request->input("vendorId"))->exists()) {
        //     return "got this vendor in admin table";
        // } else {
        //     return "got this vendor not in admin table";
        // }

        if ($request->input("status") == "Active") {
            $status = 0;
            Admin::where("id", $request->input("adminId"))->update([
                "status" => $status,
            ]);
        } else {
            $status = 1;
            Admin::where("id", $request->input("adminId"))->update([
                "status" => $status,
            ]);
        }

        return response()->json(["status" => $status, "adminId" => $request->input("adminId")]);

    }

    //admins page

    public function admins() {
        Session::put("page", "admins");
        //logged in admin
        $admin = Auth::guard('admin')->user()->id;
        $admins = Admin::where("type", "!=", "vendor")->where("id", "!=", $admin)->get();
        return view("admin.admins.admins", compact("admins"));
    }

    public function adminsDetails(Request $request) {
        $admin_details = Admin::where("id", $request->id)->first();
        return view("admin.admins.admin-details", compact("admin_details"));
    }
    public function updateAdminStatus(Request $request) {

        if ($request->input("status") == "Active") {
            $status = 0;
            Admin::where("id", $request->input("adminId"))->update([
                "status" => $status,
            ]);
        } else {
            $status = 1;
            Admin::where("id", $request->input("adminId"))->update([
                "status" => $status,
            ]);
        }

        return response()->json(["status" => $status, "adminId" => $request->input("adminId")]);
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route("admin.login");
    }
}
