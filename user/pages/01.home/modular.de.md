---
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _banner
            - _dienstleistungen
            - _fahrzeuge
            - _preise-mit-chauffeur
            - _preise-ohne-chauffeur
            - _konktakt
cache_enable: false
form:
    client_side_validation: false
    action: /home
    name: contact
    button_outer_classes: 'form-group col-md-6 col-sm-12'
    fields:
        -
            name: name
            label: Name
            placeholder: 'Name *'
            autocomplete: 'on'
            type: text
            outerclasses: 'form-group col-md-6 col-sm-12'
            classes: col-md-12
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Email-Addresse *'
            type: email
            outerclasses: 'form-group col-md-6 col-sm-12'
            classes: col-md-12
            validate:
                required: true
        -
            name: telefon
            label: telefon
            placeholder: 'Telefon *'
            autocomplete: 'on'
            type: text
            outerclasses: 'form-group col-md-6 col-sm-12'
            classes: col-md-12
            validate:
                required: true
        -
            name: plz
            label: plz
            placeholder: 'Postleitzahl *'
            autocomplete: 'on'
            type: text
            outerclasses: 'form-group col-md-6 col-sm-12'
            classes: col-md-12
            validate:
                required: true
        -
            name: message
            type: honeypot
        -
            name: nachricht
            label: Nachricht
            placeholder: 'Nachricht (optional)'
            type: textarea
            rows: 5
            outerclasses: 'form-group col-md-12'
            classes: col-md-12
    buttons:
        -
            type: submit
            value: Absenden
    process:
        -
            email:
                subject: '[neue Nachricht über Web-Kontaktformular] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            display: /danke
---

