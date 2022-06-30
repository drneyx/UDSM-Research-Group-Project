@extends('Backend.main.main')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <a href="/a_activity">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Activities</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$activity}}</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total activites</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/a_research">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Research</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$research}}</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Total research</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/a_publications">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Today</span>
                                </div>
                                <h5>Publications</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$publications}}</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>Total Publications</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/a_members">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Members</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{$members}}</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>Total Members</small>
                            </div>
                    </div>
                        </a>
               </div>
        </div>
</div>
@endsection