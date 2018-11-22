
@extends('home')
@section('title', 'Cập nhật Blog')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật Blog</h1>
            </div>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $post->title; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Teaser</label>
                        <textarea name="teaser" class="form-control"><?php echo $post->teaser; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control"><?php echo $post->content; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Created</label>
                        <input type="date" name="created" value="<?php echo $post->created;?>" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
