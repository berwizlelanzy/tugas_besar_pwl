<?php

namespace App\Http\Controllers;

use App\Appointment;

class AppointmentController
{
    public function index(){
        $appointment = Appointment::all();
        return view('Appointment.appointment', ['appointment'=>$appointment]);
    }

}