class Api::PostsController < ApplicationController
  skip_before_action :verify_authenticity_token
  def index
    posts = Post.all
    render json: posts.as_json
  end

  def show
    post = Post.find_by(id: params[:id])
    render json: post.as_json
  end

  def update
    post = Post.find_by(id: params[:id])
    post.body = params[:body]
    post.title = params[:title]
    if post.save
      render json: post.as_json
    else
      render json: { error: observation.errors.full_messages }, status: :bad_request
    end
  end
end
