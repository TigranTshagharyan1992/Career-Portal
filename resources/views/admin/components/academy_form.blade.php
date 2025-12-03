<form method="POST" action="{{ $action }}" id="courses_form">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <fieldset class="module aligned">

        {{-- Course Name --}}
        <div class="form-row field-Course_name">
            <label class="required" for="Course_name">Course name:</label>
            <div class="field-content">
                <input type="text" name="Course_name"
                       class="vTextField @error('Course_name') is-invalid @enderror"
                       maxlength="255" required
                       id="Course_name"
                       value="{{ old('Course_name', $course->Course_name ?? '') }}">
                @error('Course_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        @if(isset($course)&& $course->id)
            <input type="hidden" name="id" value="{{ $course->id }}">
        @endif

        {{-- Country --}}
        <div class="form-row field-Country">
            <label class="required" for="Country">Country:</label>
            <div class="field-content">
                <select name="Country" id="Country"
                        class="vTextField @error('Country') is-invalid @enderror"
                        required>
                    @foreach (['Armenia','Lebanon','Georgia','Kyrgyzstan'] as $country)
                        <option value="{{ $country }}"
                            {{ old('Country', $course->Country ?? '') === $country ? 'selected' : '' }}>
                            {{ $country }}
                        </option>
                    @endforeach
                </select>

                @error('Country')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Course Description --}}
        <div class="form-row field-Course_description">
            <label class="required" for="Course_description">Course description:</label>
            <div class="field-content">
                <textarea name="Course_description"
                          id="Course_description"
                          class="rich-editor @error('Course_description') is-invalid @enderror">
                    {{ old('Course_description', $course->Course_description ?? '') }}
                </textarea>
                @error('Course_description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- How to Apply --}}
        <div class="form-row field-How_to_apply">
            <label class="required" for="How_to_apply">How to apply:</label>
            <div class="field-content">
                <textarea name="How_to_apply"
                          id="How_to_apply"
                          class="rich-editor @error('How_to_apply') is-invalid @enderror">
                    {{ old('How_to_apply', $course->How_to_apply ?? '') }}
                </textarea>
                @error('How_to_apply')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Deadline --}}
        <div class="form-row field-Deadline">
            <label class="required" for="Deadline">Deadline:</label>
            <div class="field-content">
                <input type="date" name="Deadline" id="Deadline" required
                       class="@error('Deadline') is-invalid @enderror"
                       value="{{ old('Deadline', $course->Deadline->format('Y-m-d') ?? '') }}">
                <span class="today-link"
                      onclick="document.getElementById('Deadline').valueAsDate = new Date()">Today</span>

                @error('Deadline')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Active --}}
        <div class="form-row field-is_active">
            <label for="is_active">Active:</label>
            <div class="field-content">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" id="is_active"
                    {{ old('is_active', $course->is_active ?? 1) ? 'checked' : '' }}>
            </div>
        </div>

    </fieldset>

    <div class="submit-row">
        <button class="default">Save</button>
    </div>
</form>
