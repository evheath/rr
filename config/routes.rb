Rails.application.routes.draw do
  # resources :posts
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html
  # get '/posts', to: 'posts#index'
  # get '/posts' => 'posts#index'
  namespace :api do
    get '/posts' => 'posts#index'
    get '/posts/:id' => 'posts#show'
    patch '/posts/:id' => 'posts#update'
  end


  # Defines the root path route ("/")
  # root "articles#index"
  # root 'application#index'
  # get '/*path', to: "application#index"
  get '*path' => redirect('/')

end
