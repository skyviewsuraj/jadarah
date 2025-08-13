<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StatusController extends Controller
{
    public function update(Request $request)
    {       
        $validatedData = $request->validate([
            'model' => 'required|string',
            'id' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        try {
            $modelClass = 'App\\Models\\' . $validatedData['model'];
            $model = $modelClass::findOrFail($validatedData['id']);
            $model->status = $validatedData['status'];
            $model->save();

            return response()->json([
                'message' => $validatedData['model'] . ' status updated successfully!',
                'status' => $model->status
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    
}
