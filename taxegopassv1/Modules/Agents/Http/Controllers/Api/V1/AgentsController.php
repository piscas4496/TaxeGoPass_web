<?php

namespace Modules\Agents\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\JsonResponseTrait;
use Modules\Agents\Http\Requests\AgentRequest;
use Modules\Agents\Entities\Agent;

class AgentsController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $agents = Agent::orderBy('id','desc')->paginate(5);
        return $this->sendData($agents);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('agents::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {
        
            $agents = new Agent;
            $agents->nomsag = $request->input('nomsag');
            $agents->genreag= $request->input('genreag');
            $agents->datenaissag= $request->input('datenaissag');
            $agents->mobile = $request->input('mobile');
            $agents->emailag = $request->input('emailag');
            $agents->passwordag= $request->input('passwordag');
            $agents->save();  
        return $this->sendResponse($agents, 'Agent saved success');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save agent');
    }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $agents = Agent::findOrFail($id);
        return $this->sendData($agents);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $agents = Agent::findOrFail($id);
        return $this->sendData($agents);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomsag' => 'sometimes|string',
            'genreag' => 'sometimes|string',
            'datenaissag' => 'sometimes|date',
            'mobile' => 'sometimes|string',
            'emailag' => 'sometimes|string|',
        ]);
     
        try {          
            $agents = Agent::find($id);
             $agents->nomsag = $request->input('nomsag');
             $agents->genreag= $request->input('genreag');
             $agents->datenaissag= $request->input('datenaissag');
             $agents->mobile = $request->input('mobile');
             $agents->emailag = $request->input('emailag');
             $agents->passwordag= $request->input('passwordag');
             $agents->save();  

         return $this->sendResponse($agents, 'Agent updated success');
     } catch (\Exception $ex) {
         return $this->sendErrorResponse('Fail to update agent');
     }

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
       Agent::find($id)->delete();
        return $this->sendResponse('agents deleted success');
    }
}
