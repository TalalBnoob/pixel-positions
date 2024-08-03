<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="90000" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park,Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="part time">Part Time</option>
            <option value="full time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acm.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extar)" name="featured" />

        <x-forms.input label="Tags (comma Sapareted)" name="tags" placeholder="laracast, Video, Education" />

        <x-forms.button>publish</x-forms.button>

    </x-forms.form>
</x-layout>
