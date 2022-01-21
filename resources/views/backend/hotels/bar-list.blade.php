@extends('layouts.backend')
@section('content')

<div class="d-flex">
	<div class="main-sidebar"></div>
    <div class="content-area">
        <nav class="content-menu">
          	<ul class="nav">
          		<?php $hid=request()->route('id');?>
            	<li><a href="{{url('/restaurants-bars-overview',$hid)}}"><span class="fas fa-chevron-left"></span>back</a></li>
            	<li><a href="{{url('/add-restaurants',$hid)}}"><span class="fas fa-plus"></span>add a restaurant or bar</a></li>
            	<li>
            		@include('backend.message')
            	</li>
            </ul>
        </nav>
        <!-- /content-menu -->
        @include('includes.inner_nav')
        <!-- /main-tabset -->
        <?php 
          $hid=request()->route('id');
           ?>
         
        	<div class="content content-rest">
        	<div class="restaurants-tabs">
				<ul>
					<li ><a href="{{url('/restaurants-bars-overview',$hid)}}">Restaurant</a></li>
					<li class="active"><a href="{{url('/bar-overview',$hid)}}">Bar</a></li>
					<li><a href="{{url('/menuplan-overview',$hid)}}">Menuplan</a></li>
				</ul>
			</div>
			<div class="hotel-admin">
			<table class="hotel-admin-table">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID</th>
						<th>Bar Name</th>
						<th> </th>
						<th> </th>
						<th> </th>
						<th> </th>
						<th>On-/Offline</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($bars as $index=>$bar)
					<tr class="" data-href="">
						<td>{{$index+1}}</td>
						<td>{{$bar->id}}</td>
						<td><a href="{{route('bar-edit',[$hid,$bar->id])}}">{{$bar->bar_name}}</a></td>
						<td> </td>
						<td> </td>
						<td> </td>
						<td> </td>
						<td> <label class="switch">
                <?php if($bar->bar_status==1){ ?>
               <input type="checkbox" class="bar_status" id="{{$bar->id}}" checked>
               <?php } else{ ?>
               <input type="checkbox" class="bar_status"  id="{{$bar->id}}">
               <?php }?>
                   <span class="slider round"></span>
                </label></td>
				</span></td>
						<td class="btn-holder">
							<a onclick="return confirm('Are you sure?')" href="{{route('bar-delete',['id'=>$hid,'tid'=>$bar->id])}}" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>
					@endforeach
					<!-- <tr class="row-link" data-href="http://ww.google.com">
						<td>2</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="toggle-off fas fa-toggle-on first-click"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>3</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>4</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>5</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>6</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>7</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>8</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>9</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>10</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr>

					<tr class="row-link" data-href="http://ww.google.com">
						<td>11</td>
						<td>312873</td>
						<td>Aarahveli Maldives</td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>
						<td><span class="fas fa-toggle-on"></span></td>
						<td class="btn-holder">
							<a href="#" class="btn-delete">
								<span class="far fa-trash-alt"></span>
								<span>Delete</span>
							</a>
						</td>
					</tr> -->

				</tbody>
			</table>
		</div>
	</div>
    </div>
</div>

<script>
	$(document).ready(function(){
    $('#hotel_admin').addClass('active');
});
$(document).ready(function(){
    $('#rest_bar').addClass('active');

    $('.bar_status').change(function() {
   
       var id=$(this).attr('id');
       
        if($(this).is(":checked")) {
        
           $status=1;
            
        }
        else{
          $status=0;
        }
       $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                  }
              });
         jQuery.ajax({
                  url: "{{ url('/bar-status') }}",
                  method: 'post',
                  data: {
                     bar_status:$status,
                       bar_id: id
                  },
                  success: function(result){
                     console.log(result);
                  }});
          });
           
    });
</script>


@endsection