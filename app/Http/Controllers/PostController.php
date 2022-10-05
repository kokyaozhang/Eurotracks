<?php
namespace App\Http\Controllers;
use App\Models\Fieldequip;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function search(Request $request)
    {

        if ($request->ajax()) {

            $data = Fieldequip::where('Identification_No', 'like', '%' . $request->search . '%')
                ->orwhere('Equipment_Name', 'like', '%' . $request->search . '%')
                ->orwhere('Serial_No', 'like', '%' . $request->search . '%')->get();


            $output = '';
            if (count($data) > 0) {

                $output = '
            <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>';

                foreach ($data as $row) {
                    $output .= '
                   <tr>
                        <td class="border px-4 py-2">'.$row->Equipment_Name.'</td>
                        <td class="border px-4 py-2" >'.$row->Identification_No.'</td>
                        <td class="border px-4 py-2">'.$row->Location .'</td>
                        <td class="border px-4 py-2">'.$row->equip_limit.'</td>
                        <td class="border px-4 py-2">


                    </tr>
                    ';
                }


                $output .= '
             </tbody>
            </table>';


            } else {

                $output .= 'No results';

            }

            return $output;

        }


    }

}
