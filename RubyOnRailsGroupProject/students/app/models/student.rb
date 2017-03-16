class Student < ActiveRecord::Base
  validates :fname, presence: true,
                    length: { minimum: 1 }
    
    validates :lname, presence: true,
                    length: { minimum: 2 }
    
    validates :studentid, presence: true,
                    length: { minimum: 7 , maximum: 8 }
end