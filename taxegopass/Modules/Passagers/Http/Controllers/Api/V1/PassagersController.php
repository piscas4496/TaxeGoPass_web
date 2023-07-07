<?php

namespace Modules\Passagers\Http\Controllers\Api\V1;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\Storage;
use Modules\Passagers\Http\Requests\PassagersRequest;
use Modules\Passagers\Entities\Passager;


class PassagersController extends Controller
{
    use JsonResponseTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $passagers = Passager::orderBy('id','desc')->paginate(5);
        return $this->sendData($passagers);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {    
            $passagers = new Passager;
            $passagers->nomspass = $request->input('nomspass');
            $passagers->genrepass= $request->input('genrepass');
            $passagers->datenaisspass= $request->input('datenaisspass');
            $passagers->telephone = $request->input('telephone');
            $passagers->emailpass = $request->input('emailpass');
            $passagers->ref_adresse= $request->input('ref_adresse');
            $passagers->ref_vol=$request->input('ref_vol');
            $passagers->save();
        return $this->sendResponse($passagers, 'Passagers saved success');
    } catch (\Exception $ex) {
        return $this->sendErrorResponse('Fail to save Passager try to verify your input');
    }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $passagers= Passager::findOrFail($id);
        return $this->sendData($passagers);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $passagers= Passager::findOrFail($id);
        return $this->sendData($passagers);
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
            'emailag' => 'sometimes|string',
        ]);
     
        try {
            $passagers = new Passager;
            $passagers->nomspass = $request->input('nomspass');
            $passagers->genrepass= $request->input('genrepass');
            $passagers->datenaisspass= $request->input('datenaisspass');
            $passagers->telephone = $request->input('telephone');
            $passagers->emailpass = $request->input('emailpass');
            $passagers->ref_adresse= $request->input('ref_adresse');
            $passagers->ref_vol=$request->input('ref_vol');
            $passagers->save();

         return $this->sendResponse($passagers, 'Passagers updated ');
     } catch (\Exception $ex) {
         return $this->sendErrorResponse('Passagers no updated');
     }
    }


    public function generate($id){
        $data = Passager::find($id);
       // $qrcode = QrCode::size(150)->generate($data->noms);

            $this->fpdf = new Fpdf;
            $this->fpdf->AddPage();
    	    $this->fpdf->SetFont('Arial', 'I', 12);
            //$this->fpdf->Image($qrcode,6,5,196);
            // Header
            // $this->fpdf->Image('../public/img/entete2.jpg',6,5,196);
            $this->fpdf->Ln(35);
            $this->fpdf->Ln();
            $this->fpdf->Cell(25,6,'id',1,0,'C');
            $this->fpdf->Cell(50,6,'nomspass',1,0,'C');
            $this->fpdf->Cell(50,6,'genrepass',1,0,'C');
            $this->fpdf->Cell(50,6,'telephone',1,0,'C');
            $this->fpdf->Cell(50,6,'emailpass',1,0,'C');
            $this->fpdf->Cell(50,6,'ref_adresses',1,0,'C');
            $this->fpdf->Ln();
            // foreach ($data as $pan)
            // {
                $this->fpdf->Cell(25,8,QrCode::size(200)->generate($data->id),1,0,'C');
                $this->fpdf->Cell(50,8,$data->noms,1,0,'C');
                $this->fpdf->Cell(50,8,$data->profession,1,0,'C');
                $this->fpdf->Cell(50,8,$data->adresse,1,0,'C');
                $this->fpdf->Ln();
            //}
            $this->fpdf->Output();
            exit;

        // return view('pages.qrcode',compact('qrcode'));
     }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Passager::find($id)->delete();
        return $this->sendResponse('Passagers number $id deleted');
    }
}
