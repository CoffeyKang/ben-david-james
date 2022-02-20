@component('mail::message')
# Register Information:
## Name: {{ data_get($data, 'first_name') }} {{ data_get($data, 'last_name') }} 
## Email: {{ data_get($data, 'email') }}
## City: {{ data_get($data, 'city') }}
## Province: {{ data_get($data, 'province') }}
 
 
Thanks,<br>
JNTO Web
@endcomponent