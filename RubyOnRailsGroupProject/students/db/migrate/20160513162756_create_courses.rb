class CreateCourses < ActiveRecord::Migration
  def change
    create_table :courses do |t|
      t.string :c_number
      t.string :c_name
      t.integer :c_hours

      t.timestamps null: false
    end
  end
end
