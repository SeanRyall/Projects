class CreateStudents < ActiveRecord::Migration
  def change
    create_table :students do |t|
      t.string :studentid
      t.string :fname
      t.string :lname
      t.string :status
      t.string :comments

      t.timestamps null: false
    end
  end
end
