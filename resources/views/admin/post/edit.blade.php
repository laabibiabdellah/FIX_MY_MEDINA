<x-dashboard-scope title='Change Status'>
    <div>
            <div class="col-12">
            <form action="{{route('dashboard-posts.update',$post)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                          <select class="form-control bg-white" name="status" id="exampleSelectGender">
                            <option selected disabled>---</option>
                            <option value="0" @if ($post->status == 0) selected @endif>In process</option>
                            <option value="1" @if ($post->status == 1) selected @endif>Done</option>
                            <option value="2" @if ($post->status == 2) selected @endif>Send</option>
                          </select>
                    </div>
                        @error('status')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Change Status</button>
                <a href="{{route('dashboard-posts.index')}}" class="btn btn-light">Annuler</a>
            </form>
          </div>
    </div>
</x-dashboard-scope>


