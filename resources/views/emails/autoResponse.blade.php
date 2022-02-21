@component('mail::message')
## Dear {{ data_get($data, 'first_name') }} {{ data_get($data, 'last_name') }} :

> Thank you for registering for the Japan 3D Travel Show 2022, which will take place on Wednesday,March 16 th , 2022. Please keep an eye on your inbox as we will shortly be emailing you all of the necessary information for joining the show.
 
> For more information, please visit <a href='www.japantravelexpo.ca'>www.japantravelexpo.ca.</a>


## Regards,
## Japan Virtual Expo Team.
@endcomponent