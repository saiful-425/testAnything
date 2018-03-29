<!--
The _editable adds a HTML comment combined with the
Storyblok JavaScript Bridge this makes the next
DOM-element after that comment clickable so the
compose mode can show the right component on click.
-->
{!! $blok['_editable'] or '' !!}
<h1>
    <!--
     You can access every attribute you have defined in the schema
     in the blok property, since this is the name we've passed it
     in the HelloWorld.vue
    -->
    {{$blok['headline']}}
</h1>