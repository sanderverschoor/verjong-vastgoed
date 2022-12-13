<x-mail::message>
# Aanvraag voor {{ $house->street_name }} {{ $house->house_number }} {{ $house->house_number_addition }} te {{ $house->city }}

<x-mail::panel>
    # Gegevens aanvrager
     Naam: {{ $sender['name'] }}
     Emailadres: {{ $sender['email'] }}
     Telefoonnummer: {{ $sender['phone'] }}
     Bericht: {{ $sender['message'] }}
</x-mail::panel>

<x-mail::button :url="$url" color="primary">
    Bekijk woning
</x-mail::button>

</x-mail::message>
