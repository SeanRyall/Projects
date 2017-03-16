class Course < ActiveRecord::Base
  has_many :comments, dependent: :destroy

  validates :c_number, presence: true,
            length: {is: 8},
            uniqueness: true
  validates_format_of :c_number, :with => /[A-Za-z]{4}\d{4}/

  validates :c_name, presence: true

  validates :c_hours, presence: true, numericality: { only_integer: true }, length: { maximum: 2 }

end
