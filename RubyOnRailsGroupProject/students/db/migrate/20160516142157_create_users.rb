class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :first_name
      t.string :last_name
      t.string :email
      t.string :phone
      t.string :office
      t.string :department
      t.boolean :isFaculty
      t.boolean :isAdmin

      t.timestamps null: false
    end
  end
end
