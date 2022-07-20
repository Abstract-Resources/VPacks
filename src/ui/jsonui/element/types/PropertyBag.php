<?php

namespace vezdehod\packs\ui\jsonui\element\types;

class PropertyBag {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#property-bag
    // public const \U$2\E = '$1'; // $3;$4

    public const FILTERED_LIGHT_MULTIPLIER = "#filtered_light_multiplier"; // float; type[custom], renderer[inventory_item_renderer]
    public const BANNER_PATTERNS = "#banner_patterns"; // string; type[custom], renderer[inventory_item_renderer]
    public const BANNER_COLORS = "#banner_colors"; // string; type[custom], renderer[inventory_item_renderer]
    public const ITEM_ID_AUX = "#item_id_aux"; // int; type[custom], renderer[inventory_item_renderer]
    public const ITEM_CUSTOM_COLOR = "#item_custom_color"; // int; type[custom], renderer[inventory_item_renderer]
    public const DISABLED_FILTER_VISIBLE = "#disabled_filter_visible"; // boolean; type[custom], renderer[inventory_item_renderer]
    public const ITEM_PICKUP_TIME = "#item_pickup_time"; // float; type[custom], renderer[inventory_item_renderer]
    public const LOOK_AT_CURSOR = "#look_at_cursor"; // boolean; type[custom], renderer[hud_player_renderer]
    public const ENTITY_TYPE = "entity_type"; // enum{player, npc}; type[custom], renderer[paper_doll_renderer]
    public const SKIN_IDX = "#skin_idx"; //	int	type[custom], renderer[paper_doll_renderer]
    public const PLAYER_UUID = "#player_uuid"; // string; type[custom], renderer[paper_doll_renderer]
    public const SKIN_ROTATION = "#skin_rotation"; // boolean; type[custom], renderer[paper_doll_renderer]
    public const CUSTOM_ROT_Y = "#custom_rot_y"; // float; type[custom], renderer[paper_doll_renderer]
    public const GESTURE_DELTA_SOURCE = "#gesture_delta_source"; //	string	type[custom], renderer[paper_doll_renderer]
    public const GESTURE_MOUSE_DELTA_X = '#gesture_mouse_delta_x'; // string; type[custom], renderer[paper_doll_renderer]
    public const PACK_ID = '#pack_id'; // int; type[custom], renderer[paper_doll_renderer]
    public const FORCE_SKIN_UPDATE = '#force_skin_update'; // string; type[custom], renderer[paper_doll_renderer]
    public const PROGRESS_BAR_VISIBLE = '#progress_bar_visible'; // boolean; type[custom] ,renderer[paper_doll_renderer]
    public const PROGRESS_BAR_TOTAL_AMOUNT = '#progress_bar_total_amount'; // float; type[custom], renderer[progress_bar_renderer]
    public const PROGRESS_BAR_CURRENT_AMOUNT = '#progress_bar_current_amount'; // float; type[custom], renderer[progress_bar_renderer]
    public const IS_DURABILITY = 'is_durability'; // boolean; type[custom], renderer[progress_bar_renderer]
    public const ROUND_VALUE = 'round_value'; // boolean; type[custom], renderer[progress_bar_renderer]
    public const HOVER_TEXT = '#hover_text'; // string; type[custom], renderer[hover_text_renderer]
    public const OPEN = '#open'; // boolean; type[custom], renderer[enchanting_book_renderer]
    public const FLYING_ITEM_COUNT = 'flying_item_count'; // int; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_ID_AUX = 'flying_item_id_aux'; // int; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_CUSTOM_COLOR = 'flying_item_custom_color'; // int; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_ORIGIN_POSITION_X = 'flying_item_origin_position_x'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_ORIGIN_POSITION_Y = 'flying_item_origin_position_y'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_ORIGIN_SCALE = 'flying_item_origin_scale'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_DESTINATION_POSITION_X = 'flying_item_destination_position_x'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_DESTINATION_POSITION_Y = 'flying_item_destination_position_y'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_DESTINATION_SCALE = 'flying_item_destination_scale'; // float; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_BANNER_PATTERNS = 'flying_item_banner_patterns'; // string; type[custom], renderer[flying_item_renderer]
    public const FLYING_ITEM_BANNER_COLORS = 'flying_item_banner_colors'; // string; type[custom], renderer[flying_item_renderer]
    public const USE_HEART_OFFSET = '#use_heart_offset'; // boolean; type[custom], renderer[armor_renderer]
    public const OPACITY_OVERRIDE = 'opacity_override'; // float; type[custom], renderer[vignette_renderer]
    public const PLAYERNAME = '#playername'; // string; type[custom], renderer[name_tag_renderer]
    public const X_PADDING = '#x_padding'; // number; type[custom], renderer[name_tag_renderer]
    public const ENTITY_ID = '#entity_id'; // string or int; type[custom], renderer[live_horse_renderer]
    public const HYPERLINK = '#hyperlink'; // string; type[button]
    public const ANCHORED_OFFSET_VALUE_X = '#anchored_offset_value_x'; // number; use_anchored_offset property
    public const ANCHORED_OFFSET_VALUE_Y = '#anchored_offset_value_y'; // number; use_anchored_offset property
    public const SIZE_BINDING_X = '#size_binding_x'; // number; use_anchored_offset property
    public const SIZE_BINDING_Y = '#size_binding_y'; // number; use_anchored_offset property
    public const HAS_FOCUS = '#has_focus'; // boolean; type[custom], renderer[3d_structure_renderer]
    public const BLOCK_POSITION = '#block_position'; // Vector [x, y, z]; type[custom], renderer[3d_structure_renderer]
    public const TOP_RIGHT_BLOCK = '#top_right_block'; // Vector [x, y, z]; type[custom], renderer[3d_structure_renderer]
    public const BOTTOM_LEFT_BLOCK = '#bottom_left_block'; // Vector [x, y, z]; type[custom], renderer[3d_structure_renderer]
    public const INCLUDE_ENTITIES = '#include_entities'; // boolean; type[custom], renderer[3d_structure_renderer]
    public const REMOVE_BLOCKS = '#remove_blocks'; // boolean; type[custom], renderer[3d_structure_renderer]
    public const INCLUDE_PLAYERS = '#include_players'; // boolean; type[custom], renderer[3d_structure_renderer]
    public const SLIDER_STEPS = '#slider_steps'; // number; type[slider]
    public const SLIDER_VALUE = '#slider_value'; // number; type[slider]
    public const PROPERTY_FIELD = '#property_field'; // string; type[edit_box]
    public const HOVER_SLICE = '#hover_slice'; // int; type[selection_wheel]
    public const TOGGLE_STATE = '#toggle_state'; // boolean; type[toggle]
    public const START_SELECTED = '#start_selected'; // boolean;
    public const TTS_DIALOG_TITLE = '#tts_dialog_title'; // string;
    public const TTS_DIALOG_BODY = '#tts_dialog_body'; // string;
    public const FORCE_UPDATE = 'force_update'; // boolean;
    public const SUB_COMMAND = '#sub_command'; // string;
    public const PANEL_TITLE = '#panel_title'; // string;
    public const INDEX = '#index'; // int;
    public const COLLECTION_PREFIX = '#collection_prefix'; // string;
    public const COLLECTION_NAME = '#collection_name'; // string;
    public const VISIBLE = '#visible'; // boolean;
    public const COMMON = '#common'; // Vector [r, g, b, a];
    public const UNCOMMON = '#uncommon'; // Vector [r, g, b, a];
    public const RARE = '#rare'; // Vector [r, g, b, a];
    public const EPIC = '#epic'; // Vector [r, g, b, a];
    public const LEGENDARY = '#legendary'; // Vector [r, g, b, a];
    public const RESET_GROUP = 'reset_group'; // enum{video, audio, accessibility};
    public const TEXT = '#text'; // string;
    public const TIMER_DURATION = 'timer_duration'; // number;
    public const SHOULD_HOST = '#should_host'; // boolean;
    public const IS_LOCAL = 'is_local'; // boolean;
    public const IS_LEFT = '#is_left'; // boolean;
    public const IS_SKINS = '#is_skins'; // boolean;
    public const IS_FEATURED = '#is_featured'; // boolean;
    public const IMAGE_NAME = '#image_name'; // string;
    public const IS_DROPDOWN = '#is_dropdown'; // boolean;
    public const TIMER_FIELD_COUNT_TO_SHOW = '#timer_field_count_to_show'; // number;
    public const OWNED_INCOMPATIBLE_PROMPT_COLOR = '#owned_incompatible_prompt_color'; // Vector [r, g, b];
    public const MODAL_TITLE_TEXT = '#modal_title_text'; // string;
    public const MODAL_LABEL_TEXT = '#modal_label_text'; // string;
    public const BUTTONS_VISIBLE = '#buttons_visible'; // boolean;
    public const NO_BUTTONS_VISIBLE = '#no_buttons_visible'; // boolean;
    public const SINGLE_BUTTON_VISIBLE = '#single_button_visible'; // boolean;
    public const TWO_BUTTONS_VISIBLE = '#two_buttons_visible'; // boolean;
    public const IS_FIXED_INVENTORY = 'is_fixed_inventory'; // boolean;
    public const EXPERIMENTAL_RADIO_BUTTON_STATE = 'experimental_radio_button_state'; // string;
    public const CLASSIC_RADIO_BUTTON_STATE = 'classic_radio_button_state'; // string;
}