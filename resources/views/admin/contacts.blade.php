@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Laravel Vue Js CRUD Application</h3>
                <div class="clearfix">
                    <span>laravel - Vue Js CURD</span>
                    <a href="" class="btn btn-success btn-sm pull-right" @click="create()">Add New</a>
                </div>
                <table class="table table-bordered table-condensed">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Action</td>
                    </tr>
                    <tr v-for="row in data">
                        <td>@{{ row.id }}</td>
                        <td>@{{ row.name }}</td>
                        <td>@{{ row.email }}</td>
                        <td>@{{ row.phone }}</td>
                        <td>
                            <button @click="edit(row)"
                                    type="button"
                                    class="btn btn-xs btn-warning"
                                    title="Edit Record"><i class="fa fa-edit"></i></button>
                            <button @click="deleteRecord(row)"
                                    type="button"
                                    class="btn btn-xs btn-danger"
                                    title="Delete Record"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </table>
                <div class="modal fade" id="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal" aria-hidden="true">&times;
                                </button>
                                <h4 class="modal-title">@{{ isInsert?'New Contact':'Edit Contact' }}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control input-sm" v-modal="Contact.name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control input-sm" v-modal="Contact.email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control input-sm" v-modal="Contact.phone">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button v-if="isInsert" type="button" class="btn btn-primary" @click="store(Contact)">Save</button>
                                <button v-if="!isInsert" type="button" class="btn btn-primary" @click="update(Contact)">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection