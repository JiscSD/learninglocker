<td>{{ $client->authority['name'] }}</td>
<td>{{ $client->api['basic_key'] }}</td>
<td>{{ $client->api['basic_secret'] }}</td>
<td class="ico_col">
  <a
    href="{{ URL() }}/lrs/{{ $lrs->_id }}/client/{{ $client->_id }}/edit"
    class="btn btn-info btn-sm"
    title="{{ Lang::get('site.edit') }}"
  >
    <i class="icon-pencil"></i>
  </a>
</td>
<td class="ico_col">@include('partials.client.forms.delete')</td>
