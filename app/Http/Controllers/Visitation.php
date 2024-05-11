<?php

namespace App\Http\Controllers;

use App\Mail\Response_Viewing_Mail;
use App\Models\project_properties;
use App\Models\project_units;
use App\Models\visitation as ModelsVisitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Visitation extends Controller
{
    //
    public function Approve_Appointments()
    {
        $data = ModelsVisitation::where('status', 'Accepted')->get();
        return response()->json(['approved' => $data]);
    }
    public function Accept_Viewing($token)
    {
        $new_token = mt_rand(111111, 999999);
        $data = ModelsVisitation::where('token', $token)->update(['status' => 'Accepted', 'token' => $new_token]);
        $sched = ModelsVisitation::where('token', $new_token)->first();
        if ($data) {
            $mail = [
                'message' => "Your viewing request has been successfully accepted. We will call you later, Thank you. ",
            ];
            Mail::to($sched->email)->send(new Response_Viewing_Mail($mail));
            return redirect('/');
        } else {
            echo "Invalid Link";
        }
    }
    public function Declined_Viewing($token)
    {
        $new_token = mt_rand(111111, 999999);
        $data = ModelsVisitation::where('token', $token)->update(['status' => 'Declined', 'token' => $new_token]);
        $sched = ModelsVisitation::where('token', $new_token)->first();
        if ($data) {
            $mail = [
                'message' => "Your viewing request has been declined. ",
            ];
            Mail::to($sched->email)->send(new Response_Viewing_Mail($mail));
            return redirect('/');
        } else {
            echo "Invalid Link";
        }
    }
    public function Pending_Appointments()
    {
        $data = ModelsVisitation::where('status', 'Pending')->get();
        return response()->json(['pending' => $data]);
    }
    public function Completed_Appointments()
    {
        $data = ModelsVisitation::where('status', 'Done')->get();
        return response()->json(['completed' => $data]);
    }
    public function Show_Appointment_Data($id)
    {
        $data = ModelsVisitation::where('id', $id)->first();
        $unit = project_units::where('id', $data->unit_id)->first();
        $project = project_properties::where('id', $unit->project_properties_id)->first();
        $data['unit'] = $unit;
        $data['project'] = $project;
        return response()->json($data);
    }
    public function Approve_Appointment($id)
    {
        $new_token = mt_rand(111111, 999999);
        $data = ModelsVisitation::where('id', $id)->update(['status' => 'Accepted', 'token' => $new_token]);
        $sched = ModelsVisitation::where('token', $new_token)->first();
        if ($data) {
            $mail = [
                'message' => "Your viewing request has been successfully accepted. We will call you later, Thank you. ",
            ];
            Mail::to($sched->email)->send(new Response_Viewing_Mail($mail));
            return response()->json(['message' => 'Appointment successfully accepted!']);
        } else {
            echo "Invalid Link";
        }
    }
    public function Decline_Appointment($id)
    {
        $new_token = mt_rand(111111, 999999);
        $data = ModelsVisitation::where('id', $id)->update(['status' => 'Declined', 'token' => $new_token]);
        $sched = ModelsVisitation::where('token', $new_token)->first();
        if ($data) {
            $mail = [
                'message' => "Your viewing request has been successfully accepted. We will call you later, Thank you. ",
            ];
            Mail::to($sched->email)->send(new Response_Viewing_Mail($mail));
            return response()->json(['message' => 'Appointment declined!']);
        } else {
            echo "Invalid Link";
        }
    }
    public function Complete_Appointment($id)
    {
        $new_token = mt_rand(111111, 999999);
        $data = ModelsVisitation::where('id', $id)->update(['status' => 'Done', 'token' => $new_token]);
        $sched = ModelsVisitation::where('token', $new_token)->first();
        if ($data) {
            $mail = [
                'message' => "Your viewing request has been successfully completed. Thank you for your time visiting our properties. ",
            ];
            Mail::to($sched->email)->send(new Response_Viewing_Mail($mail));
            return response()->json(['message' => 'Appointment successfully completed!']);
        } else {
            echo "Invalid Link";
        }
    }
}
