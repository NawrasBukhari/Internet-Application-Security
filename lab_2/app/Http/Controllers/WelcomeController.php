<?php

namespace App\Http\Controllers;

use App\Http\Requests\WelcomeRequest;
use App\Models\Blood;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function safeSubmit(WelcomeRequest $request, Blood $blood)
    {
        // this is coming from the welcome request
        $request->validated();

        // using the model to create a query by using {App\Models\Blood} model.
        $blood->create([
            /**
             * an input should be passed with the same name such as
             * <input name="name" id="anything" class="whatever">
             * <input name="blood" id="anything" class="whatever">
             */
            'name' => $request->name,
            'blood' => $request->blood
        ]);

        return redirect()->back();
    }

    public function DangerousSubmit(Request $request, Blood $blood)
    {
        $blood->create($request->all());
        return redirect()->back();
    }

}
