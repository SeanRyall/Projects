class User < ActiveRecord::Base
  validates :email, presence: true,
            length: { minimum: 1 }
end
