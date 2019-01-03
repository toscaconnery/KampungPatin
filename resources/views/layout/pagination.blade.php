@if($paginator->hasPages())
<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
	@foreach($elements as $element)
		@foreach($element as $page => $url)
			@if($page == $paginator->currentPage())
				<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
					{{$page}}
				</a>
			@else
				<a href="{{$url}}" class="flex-c-m how-pagination1 trans-04 m-all-7">
					{{$page}}
				</a>
			@endif
		@endforeach
	@endforeach
</div>
@endif