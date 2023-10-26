<?php

namespace Modules\Paiements\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Paiements\Http\Requests\PaiementRequest;
use Modules\Paiements\Entities\Paiement;


class PaiementsController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $paiements = Paiement::with(['agent','passager','typefrais'])->orderBy('id','desc')->paginate(5);
        return $this->sendData($paiements);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('paiements::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {
            $paiements = new Paiement;
            $paiements->motif = $request->input('motif');
            $paiements->datepaiement= $request->input('datepaiement');
            $paiements->ref_passager= $request->input('ref_passager');
            $paiements->ref_agent = $request->input('ref_agent');
            $paiements->ref_typefrais = $request->input('ref_typefrais');
            $paiements->save();
           

        return $this->sendResponse($paiements, 'Paiement saved success');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save Paiement');
    }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $Paiements= Paiement::findOrFail($id);
        return $this->sendData($paiement);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $Paiements= Paiement::findOrFail($id);
        return $this->sendData($paiement);
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
            'motif' => 'sometimes|string',
            'datepaeiement' => 'sometimes|date',
            'ref_passager' => 'sometimes|integer',
            'ref_agent' => 'sometimes|integer',
            'ref_typefrais' => 'sometimes|integer',
        ]);
        try {
            $paiements = new Paiement;
            $paiements->motif = $request->input('motif');
            $paiements->datepaiement= $request->input('datepaiement');
            $paiements->ref_passager= $request->input('ref_passager');
            $paiements->ref_agent = $request->input('ref_agent');
            $paiements->ref_typefrais = $request->input('ref_typefrais');
            $paiements->save();
           

        return $this->sendResponse($paiement, 'paiement  updated');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to udate the paiement');
    }

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
         Paiement::find($id)->delete();
        return $this->sendResponse('agents deleted success');
    }
}
