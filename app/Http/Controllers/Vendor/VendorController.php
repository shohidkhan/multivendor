<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\VendorBankDetail;
use App\Models\VendorBusinessDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller {

    //vendor business details page
    public function vendorBusinessDetailsPage() {
        Session::put("page", "business-details");
        $loggedUserId = Auth::guard('admin')->user()->id;

        $loggedUserDetails = Admin::where('id', $loggedUserId)->first();

        $vendorDetails = Vendor::where('id', $loggedUserDetails->vendor_id)->first();
        $vendorBusinessDetails = VendorBusinessDetail::where('vendor_id', $vendorDetails->id)->first();
        return view('admin.vendor.business-details', compact('vendorBusinessDetails'));
    }
    //vendor business details update
    public function updateVendorBusinessDetails(Request $request) {

        try {
            $request->validate([
                'shop_name' => 'required|max:150',
                'shop_address' => 'required|max:150',
                'shop_city' => 'required|max:150',
                'shop_country' => 'required|max:150',
                'shop_email' => 'required|max:150',
                'shop_pincode' => 'required|numeric',
                'shop_number' => 'required',
                'shop_license_number' => 'required',
                'shop_mobile_number' => 'required|min:11|numeric',
                "nid_front" => "required|image",
                "nid_back" => "required|image|mimes:jpeg,png,jpg",
            ]);
            $loggedUserId = Auth::guard('admin')->user()->id;

            $loggedUserDetails = Admin::where('id', $loggedUserId)->first();

            $vendorDetails = Vendor::where('id', $loggedUserDetails->vendor_id)->first();
            //vendoe business details

            $vendorBusinessDetails = VendorBusinessDetail::where('vendor_id', $vendorDetails->id)->first();
            //

            if ($vendorBusinessDetails->nid_front && $vendorBusinessDetails->nid_back) {
                if ($request->hasFile('nid_front') || $request->hasFile('nid_back')) {
                    //get nid_front and nid_back, shop_logo image from request

                    //removed old image
                    unlink(public_path($vendorBusinessDetails->nid_front));

                    //removed old image
                    unlink(public_path($vendorBusinessDetails->nid_back));

                    $nid_front = $request->file('nid_front');
                    $nid_back = $request->file('nid_back');
                    //create new image name
                    $nid_front_name = time() . '.' . $nid_front->getClientOriginalExtension();
                    $nid_back_name = time() . '.' . $nid_back->getClientOriginalExtension();

                    //make image upload path
                    $nid_front_path = "assets/backend/uploads/vendor/nid_front/{$nid_front_name}";
                    $nid_back_path = "assets/backend/uploads/vendor/nid_back/{$nid_back_name}";

                    //move image to upload path
                    $nid_front->move(public_path('assets/backend/uploads/vendor/nid_front'), $nid_front_name);
                    $nid_back->move(public_path('assets/backend/uploads/vendor/nid_back'), $nid_back_name);

                    VendorBusinessDetail::where('vendor_id', $vendorDetails->id)->update([
                        "shop_name" => $request->input("shop_name"),
                        "shop_address" => $request->input("shop_address"),
                        "shop_email" => $request->input("shop_email"),
                        "shop_city" => $request->input("shop_city"),
                        "shop_country" => $request->input("shop_country"),
                        "shop_pincode" => $request->input("shop_pincode"),
                        "shop_number" => $request->input("shop_number"),
                        "shop_license_number" => $request->input("shop_license_number"),
                        "shop_mobile_number" => $request->input("shop_mobile_number"),
                        "shop_website_url" => $request->input("shop_website_url"),
                        "shop_instagram_url" => $request->input("shop_instagram_url"),
                        "shop_facebook_url" => $request->input("shop_facebook_url"),
                        "shop_twitter_url" => $request->input("shop_twitter_url"),
                        "shop_youtube_url" => $request->input("shop_youtube_url"),
                        "shop_whatsapp_number" => $request->input("shop_whatsapp_number"),
                        "gst_number" => $request->input("gst_number"),
                        "pan_number" => $request->input("pan_number"),
                        "nid_front" => $request->hasFile("nid_front") ? $nid_front_path : $vendorBusinessDetails->nid_front,
                        "nid_back" => $request->hasFile("nid_back") ? $nid_back_path : $vendorBusinessDetails->nid_back,
                    ]);

                    return redirect()->back()->with("success", "Business details update successfully");
                }
            } else if ($vendorBusinessDetails->nid_front == null && $vendorBusinessDetails->nid_back == null) {

                if ($request->hasFile('nid_front') || $request->hasFile('nid_back')) {
                    //get nid_front and nid_back, shop_logo image from request
                    $nid_front = $request->file('nid_front');
                    $nid_back = $request->file('nid_back');
                    //create new image name
                    $nid_front_name = time() . '.' . $nid_front->getClientOriginalExtension();
                    $nid_back_name = time() . '.' . $nid_back->getClientOriginalExtension();

                    //make image upload path
                    $nid_front_path = "assets/backend/uploads/vendor/nid_front/{$nid_front_name}";
                    $nid_back_path = "assets/backend/uploads/vendor/nid_back/{$nid_back_name}";
                    //move image to upload path
                    $nid_front->move(public_path('assets/backend/uploads/vendor/nid_front'), $nid_front_name);
                    $nid_back->move(public_path('assets/backend/uploads/vendor/nid_back'), $nid_back_name);
                    VendorBusinessDetail::where('vendor_id', $vendorDetails->id)->update([
                        "shop_name" => $request->input("shop_name"),
                        "shop_address" => $request->input("shop_address"),
                        "shop_email" => $request->input("shop_email"),
                        "shop_city" => $request->input("shop_city"),
                        "shop_country" => $request->input("shop_country"),
                        "shop_pincode" => $request->input("shop_pincode"),
                        "shop_number" => $request->input("shop_number"),
                        "shop_license_number" => $request->input("shop_license_number"),
                        "shop_mobile_number" => $request->input("shop_mobile_number"),
                        "shop_website_url" => $request->input("shop_website_url"),
                        "shop_instagram_url" => $request->input("shop_instagram_url"),
                        "shop_facebook_url" => $request->input("shop_facebook_url"),
                        "shop_twitter_url" => $request->input("shop_twitter_url"),
                        "shop_youtube_url" => $request->input("shop_youtube_url"),
                        "shop_whatsapp_number" => $request->input("shop_whatsapp_number"),
                        "gst_number" => $request->input("gst_number"),
                        "pan_number" => $request->input("pan_number"),
                        "nid_front" => $request->hasFile("nid_front") ? $nid_front_path : $vendorBusinessDetails->nid_front,
                        "nid_back" => $request->hasFile("nid_back") ? $nid_back_path : $vendorBusinessDetails->nid_back,
                    ]);

                    return redirect()->back()->with("success", "Business details update successfully");
                }
            }
        } catch (\Exception $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    //vendor bak details page

    public function vendorBankDetailsPage() {
        Session::put("page", "bank-details");
        $loggedUserId = Auth::guard('admin')->user()->id;
        $loggedUserDetails = Admin::where("id", $loggedUserId)->first();
        $vendorDetails = Vendor::where("id", $loggedUserDetails->vendor_id)->first();
        $vendorBankDetails = VendorBankDetail::where("vendor_id", $vendorDetails->id)->first();
        return view('admin.vendor.bank-details', compact('vendorBankDetails'));
    }

    public function updateBankDetails(Request $request) {

        try {
            $request->validate([
                'bank_name' => 'required',
                'account_name' => 'required',
                'account_number' => 'required',
                'ifsc_code' => 'required',
                'branch_name' => 'required',
                'branch_address' => 'required',
                'account_type' => 'required',
                'account_status' => 'required',
            ]);
            $loggedUserId = Auth::guard('admin')->user()->id;
            $loggedUserDetails = Admin::where("id", $loggedUserId)->first();
            $vendorDetails = Vendor::where("id", $loggedUserDetails->vendor_id)->first();
            $vendorBankDetails = VendorBankDetail::where("vendor_id", $vendorDetails->id)->first();
            VendorBankDetail::where("vendor_id", $vendorDetails->id)->update([
                "bank_name" => $request->input("bank_name"),
                "account_name" => $request->input("account_name"),
                "account_number" => $request->input("account_number"),
                "ifsc_code" => $request->input("ifsc_code"),
                "branch_name" => $request->input("branch_name"),
                "branch_address" => $request->input("branch_address"),
                "account_type" => $request->input("account_type"),
                "account_status" => $request->input("account_status"),
                "upi_id" => $request->input("upi_id"),
            ]);

            return redirect()->back()->with("success", "Bank details update successfully");
        } catch (\Exception $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

}
