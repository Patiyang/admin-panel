@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Authentication Settings') }}</div>
                <div class="card-body">
                    <form action="{{ route('settings.update', $settings->id) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group pb-4">
                            <label for="gpt_key"> Chat GPT</label>
                            <input type="text" class="form-control" name="gpt_key" id="gpt_key"
                                placeholder="Enter your Chat GPT api key here ..." value={{ $settings->gpt_key }}>
                        </div>
                        <div class="form-group pb-4">
                            <label for="elevenlabs_key"> Chat GPT</label>
                            <input type="text" class="form-control" name="elevenlabs_key" id="elevenlabs_key"
                                placeholder="Enter your Chat GPT api key here ..." value={{ $settings->elevenlabs_key }}>
                        </div>
                        <div class="form-group pb-4">
                            <label for="gpt_append_message"> Chat GPT</label>
                            <textarea class="form-control" name="gpt_append_message" id="gpt_append_message" rows="4"
                                placeholder="Enter the message to append to your chat GPT query">{{ $settings->gpt_append_message }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary"> Update Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}
@endsection
