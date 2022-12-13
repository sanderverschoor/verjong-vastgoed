@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
        <img class="" width="500" height="auto" src="https://verjongvastgoed.prismaticdemo.site/wp-content/uploads/2022/11/Logo-Verjong-Vastgoed.png">
@else
        <img class="" width="500" height="auto" src="https://verjongvastgoed.prismaticdemo.site/wp-content/uploads/2022/11/Logo-Verjong-Vastgoed.png">
@endif
</a>
</td>
</tr>
