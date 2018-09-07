@extends('layouts.adminLayout.admin_design');


@section('content')
<div id="content">
    <section class="container">
        <div class="col-md-12">
            <h3 align="center">Plaints Received</h3>
            <table class="table table-bordered">
                <thead>
                   <<th>Full Name</th>
                    <th>ID Number</th>
                    <th>Telephone</th>
                    <th>Accused Name</th>
                    <th>Accused Residence</th>
                    <th>Case Description</th>
                    <th>FileName</th>
                   <th>Assessment</th>
                    
                    
                </thead>
                <tbody>
                    @foreach ($complaints as $complainant )
                       <tr>
                             <td>
                                {{ $complainant->name }}
                             </td>

                        <td>
                                {{ $complainant->idno }}
                        </td>
                        <td>
                                {{ $complainant->telno }}
                        </td>
                        <td> 
                               {{ $complainant->acc_name }}
                        </td>
                        <td>
                            {{ $complainant->acc_residence}}
                        </td> 
                        <td>
                            {{ $complainant->casedescription }}
                        </td>
                        <td>
                            {{ $complainant->filename  }}
                        </td>
                     <td>
                            <a name="Accept" href="{{ route('accept',$complainant->id)}}" class="btn btn-primary">Accept</a>
                            <a name="Reject" href="{{ route('reject',$complainant->id)}}" class="btn btn-primary">Reject</a>
                     </td>


                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>


    </section>
</div>

@endsection
