class CreateTerms < ActiveRecord::Migration
  def change
    create_table :terms do |t|
      t.string :name
      t.string :year

      t.timestamps null: false
    end
  end
end
