<?php
/**
 * Created by PhpStorm.
 * User: damir
 * Date: 6/30/20
 * Time: 00:58
 */

namespace App\Http\Controllers;


use App\SiteText;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SiteTextController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param SiteText $siteText
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteText $siteText)
    {
        return view('admin.siteTexts.edit', ['siteText' => $siteText]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param SiteText $siteText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteText $siteText)
    {
        $siteText->update($request->all());
        return redirect()->route('admin.siteText.datatable');
    }

    public function datatableData()
    {


        return DataTables::of(SiteText::query())
            ->addColumn('actions', function (SiteText $siteText) {
                return '<a class="btn btn-primary ml-1" href="' .  route('admin.siteTexts.edit', $siteText) . '"><i class="fas fa-pen"></i></a>';
            })
            ->rawColumns(['actions'])
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.siteTexts.index');
    }
}