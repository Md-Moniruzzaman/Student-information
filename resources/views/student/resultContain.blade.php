@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light text-center bg-secondary">View Result</div><br>
                    <a href="{{route('/home')}}" class="ml-auto"><button class="btn btn-success">Back Home</button></a><br>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th width="10%">SL.</th>
                            <th width="15%">Subject</th>
                            <th width="15%">Marks</th>
                            <th width="10%">GPA</th>
                            </thead>
                            <tbody>
                            <?php $id=0;
                               $Cgpa=0; $sum=0; $grade=0;   $abc=0; $result=0; $x=0; ?>
                            @foreach($viewResultByIds as $viewResultById)
                                <tr>
                                    <td><?php  $id++; echo $id; ?></td>
                                    <td>{{$viewResultById->subject}}</td>
                                    <td>{{$Cgpa=$viewResultById->marks}}</td>
                                   <td> <?php $sum = $sum + $Cgpa;
                                    if($Cgpa == 40){
                                        echo"D";
                                        $grade = 1;
                                    }elseif ($Cgpa <=50){
                                        echo"C";
                                        $grade = 2;
                                    }
                                    elseif ($Cgpa <=60){
                                        echo"B";
                                        $grade = 3;
                                    }
                                    elseif ($Cgpa <=65){
                                        echo"A-";
                                        $grade = 3.5;
                                    }
                                    elseif ($Cgpa <=79){
                                        echo"A";
                                        $grade = 4;
                                    }
                                    elseif ($Cgpa >=80){
                                        echo"A+";
                                        $grade = 5;
                                    }

                                    $abc = $abc + $grade;
                                    ?>
                                   </td>
                                </tr>
                            @endforeach
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card>">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Name:</b>&nbsp;{{$getById->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card>">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Class:</b>&nbsp;{{$getById->class}}&nbsp;&nbsp;<b>Roll:</b>&nbsp;{{$getById->roll}}&nbsp;<b>CGPA:</b>
                                                    <?php

                                                        $result = ($abc/$id) ;
                                                        $x =(int)$result;
                                                        if($x == 1){
                                                            echo"D";
                                                        }else if($x <=2){
                                                            echo"C";
                                                        }else if($x <=3){
                                                            echo"B";
                                                        }else if($x <=3.5){
                                                            echo"A-";
                                                        }else if($x <=4){
                                                            echo"A";
                                                        }else if($x ==5){
                                                            echo"A+";
                                                        }else{
                                                            echo"Fail";
                                                        }
                                                    ?>
                                                    &nbsp;(<?php echo $sum/$id;?>%)
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
