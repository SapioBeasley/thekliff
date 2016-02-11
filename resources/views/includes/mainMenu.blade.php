<li>
	<a href="{{route('index')}}">Home</a>
</li>
<li>
	<a href="{{route('category.show', 'women')}}">Women <span>+</span></a>
	<ul class="submenu">
		<li><a href="{{route('category.show', ['women', 'subcategory=tops'])}}">Tops</a></li>
		<li><a href="{{route('category.show', ['women', 'subcategory=sets'])}}">Sets</a></li>
		<li><a href="{{route('category.show', ['women', 'subcategory=denim'])}}">Denim</a></li>
		<li><a href="{{route('category.show', ['women', 'subcategory=bottoms'])}}">Bottoms</a></li>
		<li><a href="{{route('category.show', ['women', 'subcategory=sweaters,jackets'])}}">Sweaters + Jackets</a></li>
		<li><a href="{{route('category.show', ['women', 'dressed,jump suits'])}}">Dressed + Jump Suits</a></li>
	</ul>
</li>
<li>
	<a href="{{route('category.show', 'men')}}">Men <span>+</span></a>
	<ul class="submenu">
		<li><a href="{{route('category.show', ['men', 'tops'])}}">Tops</a></li>
		<li><a href="{{route('category.show', ['men', 'pants'])}}">Pants</a></li>
		<li><a href="{{route('category.show', ['men', 'shorts'])}}">Shorts</a></li>
		<li><a href="{{route('category.show', ['men', 'denim'])}}">Demin</a></li>
		<li><a href="{{route('category.show', ['men', 'jackets'])}}">Jackets</a></li>
		<li><a href="{{route('category.show', ['men', 'sweaters'])}}">Sweaters</a></li>
	</ul>
</li>
<li>
 	<a href="{{route('category.show', 'new-arrivals')}}">New Arrivals <span>+</span></a>
 	<ul class="submenu">
		<li><a href="{{route('category.show', ['new', 'men'])}}">Men</a></li>
		<li><a href="{{route('category.show', ['new', 'women'])}}">Women</a></li>
	</ul>
</li>
<li>
	<a href="{{route('category.show', 'accessories')}}">Accessories <span>+</span></a>
	<ul class="submenu">
		<li><a href="{{route('category.show', ['accessories', 'men'])}}">Men</a></li>
		<li><a href="{{route('category.show', ['accessories', 'women'])}}">Women</a></li>
	</ul>
</li>
<li>
	<a href="{{route('category.show', 'sales')}}">Sales <span>+</span></a>
	<ul class="submenu">
		<li><a href="{{route('category.show', ['sales', 'men'])}}">Men</a></li>
		<li><a href="{{route('category.show', ['sales', 'women'])}}">Women</a></li>
	</ul>
</li>
{{-- <li>
	<a href="{{route('blog.index')}}">From Blog</a>
</li> --}}
