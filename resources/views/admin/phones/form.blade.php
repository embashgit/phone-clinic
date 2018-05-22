<div align="center">
	
	<div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}" >
	
		
		<input type="text" name="brand" class="form-control" placeholder="enter Phone brand">

		
		@if ($errors->has('brand'))
	   		<span class="help-block"> {{ $errors->first('brand') }}</span>
	    @endif
	</div>
	
<div class="form-group">

	<input type="submit" class="btn btn-success" value="Save Phone">

</div>	
</div>


