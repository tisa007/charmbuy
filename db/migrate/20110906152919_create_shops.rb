class CreateShops < ActiveRecord::Migration
  def change
    create_table :shops do |t|
      t.string :name
      t.string :icon
      t.string :link
      t.string :site

      t.timestamps
    end
  end
end
