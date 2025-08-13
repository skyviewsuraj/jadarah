<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteController extends Controller
{
    public function destroy(Request $request)
    {
        //abort_if(!auth()->user()->can('delete.any'), 403);
        $validatedData = $request->validate([
            'model' => 'required|string',
            'id' => 'required|integer',
        ]);

        try {
            $modelClass = 'App\\Models\\' . $validatedData['model'];
            $model = $modelClass::findOrFail($validatedData['id']);
            $modelName = class_basename($model);
            
            $model->delete();

            return response()->json([
                'message' => $modelName . ' has been deleted successfully!',
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while deleting the record.'], 500);
        }
    }
}
